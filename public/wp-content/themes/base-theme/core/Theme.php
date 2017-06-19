<?php

namespace Core;

abstract class Theme
{
    /**
     * Theme settings
     *
     * @var array
     */
    protected $settings = [];

    /**
     * Registered postTypes
     *
     * @var array
     */
    protected $postTypes = [];

    /**
     * Bootstrap function for the class.
     * Loads everything up based off of various parameters you can set.
     *
     * @param string $path root theme path
     */
    public function __construct($path = '')
    {
        $this->rootPath = $path;
        $this->loadConfiguration();
        $this->loadBlade();
        $this->loadACF();
        $this->loadShortCodes();
        $this->loadPostTypes();
        $this->loadCustomTaxonomies();
        $this->loadSidebars();
        $this->loadThumbnailSupport();
        $this->removeJunk();

        $this->loadOptionsPanelIfNeeded();
        $this->loadMenus();

        define('DISALLOW_FILE_EDIT', $this->config('disabled_theme_editor'));

        add_action('init', array($this, 'loadFiles'));
        add_action('init', array($this, 'clearBladeCache'));
        add_action('init', array($this, 'loadConsoleCommands'));
        add_action('init', array($this, 'removeDefaultPostTypes'));

        /* Enqueue the Theme Script */
        add_action('wp_enqueue_scripts', array($this, 'loadScripts'));
        add_action('wp_enqueue_scripts', array($this, 'loadStyles'));

        add_action('wp_head', array($this, 'echoAdditionalJsCss')); /* Load custom CSS/JS into head */
        add_action('wp_head', array($this, 'echoFaviconHtml')); /* Load favicions into head */

        /* Load additional JS into footer */
        add_action('wp_footer', array($this, 'echoAdditionalFooterJsCss'));

        /* Clean up excerpt */
        add_filter('excerpt_more', array($this, 'substituteExcerpt'));

        /* Remove all junk */

    }

    /**
     * @return string Path to configuration folder
     */
    public function configPath()
    {
        return $this->rootPath . DIRECTORY_SEPARATOR . 'config';
    }

    /**
     * Load the configuration to be available through $this->config('name')
     * @see $this->config()
     */
    protected function loadConfiguration()
    {
        $settings = require_once($this->configPath() . '/app.php');
        $this->settings = array_merge($this->settings, $settings);
    }

    /**
     * Loads the blade template engine.
     */
    protected function loadBlade()
    {
        if (!class_exists('WP_Blade_Main_Controller')) {
            include_once('lib/blade/blade.php');
        }
    }

    /**
     * Loads ACF if the plugin is not included.
     */
    protected function loadACF()
    {
        if (!class_exists('acf')) {
            add_filter('acf/settings/path', array($this, 'myAcfSettingsPath'));
            add_filter('acf/settings/dir', array($this, 'myAcfSettingsDir'));
            include_once('lib/acf/acf.php');

            if ((WP_DEBUG == false && $this->config('force_enable_acf_option_panel') === false) || FORCE_HIDE_ACF_EDIT === true) {
                add_filter('acf/settings/show_admin', '__return_false');
            }
        }

        add_filter('acf/format_value', array($this, 'parseTemplateDirectory'), 10, 3);

        if (function_exists('acf_wpcli_register_groups')) {
            acf_wpcli_register_groups();
        }
    }

    /**
     * Load Short Codes
     */
    protected function loadShortCodes()
    {
        //
    }

    /**
     * Custom Post Types should be loaded in this method
     */
    protected function loadPostTypes()
    {
        $this->postTypes()->each(function ($className) {
            $this->loadPostType($className);
        });
    }

    /**
     * Load pot type
     *
     * @param $className post type class name
     */
    protected function loadPostType($className)
    {
        /** @var PostType $postType */
        $postType = new $className();

        // Ignore built in post types
        if(in_array($postType->name(), ['post', 'page', 'attachment'])) return;
        register_extended_post_type($postType->name(), $postType->args(), $postType->names());
    }

    /**
     * Custom Taxonomies should be loaded in this method
     */
    protected function loadCustomTaxonomies()
    {
        //
    }

    /**
     * Custom sidebars should be loaded in this method
     */
    protected function loadSidebars()
    {
        //
    }

    /**
     * Load Thumbnail Support
     */
    protected function loadThumbnailSupport()
    {
        if (is_array($this->config('image_sizes'))) {
            if ($this->config('load_thumbnail_support')) {
                add_theme_support('post-thumbnails');
            }
            foreach ($this->config('image_sizes') as $size) {
                add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);
            }
        }
    }

    /**
     * Clean code = better code.
     */
    protected function removeJunk()
    {
        remove_action('template_redirect', 'wp_shortlink_header', 11);
        add_filter('wp_headers', [$this, 'removeXPingback']);

        remove_action('wp_head', 'rel_canonical');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'start_post_rel_link', 10);
        remove_action('wp_head', 'parent_post_rel_link', 10);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

    }

    /**
     * Options Panel should be loaded in this method
     */
    protected function loadOptionsPanel()
    {
        //
    }

    /**
     * Call loadOptionsPanel if load_options_panel setting is set to true
     */
    private function loadOptionsPanelIfNeeded() {
        if ($this->config('load_options_panel')) {
            $this->loadOptionsPanel();
        }
    }

    /**
     * Loads the menus.
     * Menus are configured in the config/app.php file
     *
     * @see /config/app.php
     */
    private function loadMenus()
    {
        if (is_array($this->config('menus'))) {
            add_theme_support('menus');
            register_nav_menus($this->config('menus'));
        }
    }

    /**
     * Files to Include
     *
     * The $files_to_load array determines the code included in the theme by default.
     * Add or remove files to the array as needed.
     *
     */
    public function loadFiles()
    {
        require_once 'inc/Helper.php';

        $custom_endpoints = get_template_directory() . '/endpoints/';
        $files = glob($custom_endpoints . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                require_once $file;
            }
        }

        $custom_functionality = get_template_directory() . '/custom-functionality/';
        $files = glob($custom_functionality . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                require_once $file;
            }
        }
    }

    /**
     * Clears the blade view cache in development
     */
    public function clearBladeCache()
    {
        if (defined('WP_DEBUG') && WP_DEBUG === true) {
            $cachedViewsDirectory = WP_BLADE_ROOT . 'storage/views/';
            $files = glob($cachedViewsDirectory . '*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    @unlink($file);
                }
            }
        }
    }

    /**
     * Load console commands
     */
    public function loadConsoleCommands()
    {
        if (defined('WP_CLI') && \WP_CLI && php_sapi_name() == 'cli') {
            $files_to_load = array(
                'wp-cli-commands/ACF.php',
                'wp-cli-commands/CustomPostType.php'
            );

            foreach ($files_to_load as $file) {
                require_once $file;
            }

            \WP_CLI::add_command('acf', '\ACF_Command');
            \WP_CLI::add_command('custom-post-type', '\CustomPostType_Command');
        }
    }

    /**
     * Disable unregistered default post types
     */
    public function removeDefaultPostTypes()
    {
        $names = $this->postTypes()->map(function ($class) {
            return (new $class())->name();
        });

        if(!$names->contains('post')) {
            unregister_post_type_forced('post');
        }

        if(!$names->contains('page')) {
            unregister_post_type_forced('page');
        }

        if(!$names->contains('attachment')) {
            unregister_post_type_forced('attachment');
        }

    }

    /**
     * Loads the theme scripts.
     */
    public function loadScripts()
    {
        $vendor = asset('compiled/js/vendor.js');
        if ($this->config('include_jquery') === false) {
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', $vendor, [], $this->version(), true);
        } else {
            wp_enqueue_script($this->name() . '-vendors', $vendor, ['jquery'], $this->version(), true);
        }

        $appJs = mix('resources/assets/compiled/js/app.js');
        wp_enqueue_script($this->name() . '-script', $appJs, ['jquery'], $this->version(), true);
    }

    /**
     * Loads the theme styles.
     */
    public function loadStyles()
    {
        $themeCss = mix('resources/assets/compiled/css/theme.css');
        wp_enqueue_style($this->name() . '-style', $themeCss, [], $this->version());
    }

    /**
     * Echoes additional header JS and CSS
     */
    public function echoAdditionalJsCss()
    {
        echo get_field('header_css_js_custom', 'option');
    }

    /**
     * Echoes the path to the favicon files for the head of the site.
     */
    public function echoFaviconHtml()
    {
        $html = '';

        $faviconPath = get_field('favicon', 'option');
        $otherIcons = get_field('other_icons', 'option');

        if ($faviconPath) {
            $html .= "<link rel='shortcut icon' href='{$faviconPath}' type='image/x-icon'>\n";
        }

        if ($otherIcons) {
            foreach ($otherIcons as $icon) {
                $html .= "<link rel='apple-touch-icon' type='image/png' sizes='{$icon['size']}' href='{$icon['image']}'>\n";
            }
        }

        echo $html;
    }

    /**
     * Echoes additional footer JS and CSS
     */
    public function echoAdditionalFooterJsCss()
    {
        echo get_field('custom_js_footer', 'option');
    }

    /**
     * Clean up the_excerpt()
     */
    public function substituteExcerpt()
    {
        if ($this->config('excerpt_text')) {
            return '... <a href="' . get_permalink() . '">' . $this->config('excerpt_text') . '</a>';
        } else {
            return '...';
        }
    }

    /**
     * Remove unneeded ping back header.
     * @param $headers array Headers
     * @return array
     */
    public function removeXPingback($headers)
    {
        unset($headers['X-Pingback']);
        return $headers;
    }

    public function parseTemplateDirectory($value, $post_id, $field)
    {
        $searchAndReplace = [
            '{IMAGEPATH}' => get_template_directory_uri() . '/public/images'
        ];

        foreach ($searchAndReplace as $search => $replace) {
            $value = str_replace($search, $replace, $value);
        }

        return $value;
    }

    public function myAcfSettingsPath($path)
    {
        return get_stylesheet_directory() . '/core/lib/acf/';
    }

    public function myAcfSettingsDir($dir)
    {
        return get_stylesheet_directory_uri() . '/core/lib/acf/';
    }

    /**
     * Fetch particular settings property
     *
     * @param $key string
     * @param $default mixed Default value
     *
     * @return mixed
     */
    public function config($key, $default = null)
    {
        return isset($this->settings[$key]) ? $this->settings[$key] : $default;
    }

    public function name()
    {
        return $this->config('name', 'base-theme');
    }

    public function version()
    {
        return $this->config('version', '1.0');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function postTypes()
    {
        return collect($this->postTypes);
    }

}