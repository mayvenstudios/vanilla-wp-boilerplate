<?php

namespace BaseTheme;

abstract class base_theme_class {

    /* Set this to the version of your theme */
    public $version;

    /* The name of the theme */
    public $theme_name;

    /* You can set this to false if the theme javascript includes jQuery */
    public $include_jquery;

    /**
    * This is the array that holds the image sizes.
    * Set this with the set_image_sizes method.
    */
    public $image_sizes;

    /**
    * This is the array of menus for the site.
    * Set this with the set_menus method.
    */
    public $menus;


    /* This allows you to enable/disable the theme editor. */
    public $disabled_theme_editor;

    /**
     * Set the excerpt read more link text.
     * set to null if you do not want to output a read more link.
     * @param  int  
     * @return Response
     */
    public $excerpt_text;

    /**
    * This is a boolean that determines whether or not to load the custom options panel
    * The custom options panel can be set in the load_options_panel method
    * Set this with the set_menus method.
    */
    public $load_options_panel;


    /* This allows you to enable/disable the post thumbnail. */
    public $load_thumbnail_support;


    /**
    * By default, the ACF Option panel is wp-admin is hidden unless WP_DEBUG is defined as true.
    * By setting this var to true, you can force enable the option panel to show even if WP_DEBUG is set to false (i.e. in a production environment)
    */
    public $force_enable_acf_option_panel;

    /**
    * This is the variable where you add the custom post types to be loaded into the theme
    */
    public $custom_post_types;


    /**
    * This is the variable where you add the custom taxonomies to be loaded into the theme
    */
    public $custom_taxonomies;
    /**
    * Bootstrap function for the class.
    * Loads everything up based off of various parameters you can set.
    */
    public function __construct()
    {   

        add_action('init', array($this, 'load_files') );

        $this->load_blade_templating();

        $this->include_advanced_custom_fields();

        /* Enqueue the Theme Script */
        add_action( 'wp_enqueue_scripts', array($this, 'load_scripts') );

        /* Enqueue the Theme Stylesheet */
        add_action( 'wp_enqueue_scripts', array($this, 'load_styles') );

        /* Load custom CSS/JS into head */
        add_action('wp_head', array($this, 'load_additional_head_js_css') );

        /* Load additional JS into footer */
        add_action('wp_footer', array($this, 'load_additional_footer_js') );

        /* Load favicions into head */
        add_action('wp_head', array($this, 'load_favicons') );

        /* Clean up excerpt */
        add_filter('excerpt_more', array($this,'excerpt_more') );

        /* Clear blade view cache if DISABLE_BLADE_CACHE constant = true */
        add_action('init', array($this, 'clear_blade_cache') );

        define( 'DISALLOW_FILE_EDIT', $this->disabled_theme_editor );


        add_action('init', array($this, 'load_wp_cli_commands'));


        require_once( get_template_directory() . '/filters-actions.php' );

        /* Load shortcodes */
        if(method_exists($this, 'load_shortcodes'))
        {

            $this->load_shortcodes();

        }

        /* Load all custom post types */
        if(method_exists($this, 'load_custom_post_types'))
        {

            add_action('init', array($this, 'add_custom_post_types'));

        }

        /* Load all custom post types */
        if(method_exists($this, 'load_custom_taxonomies'))
        {

            add_action('init', array($this, 'add_custom_taxonomies'));

        }

        /* Load all options panels if not globally disabled */
        if(method_exists($this, 'load_options_panel') && $this->load_options_panel == true)
        {

            $this->load_options_panel();

        }

        
        /* Load all dynamic sidebars */
        if(method_exists($this, 'load_sidebars'))
        {

            add_action('widgets_init', array($this, 'load_sidebars') );

        }


        /* Load all image sizes */
        if(method_exists($this, 'set_image_sizes'))
        {   
        
            $this->set_image_sizes();
            $this->load_thumbnail_support();
        
        }


        /* Set all menus and load menu support */
        if(method_exists($this, 'set_menus'))
        {   
        
            $this->set_menus();
            $this->load_menu_support();
        
        }

        /* Remove all junk */
        $this->remove_junk();
    }


    /**
     * This method will loop through the $custom_post_types array and generate the register_post_type function call.
     *
     */
    public function add_custom_post_types()
    {
        /* loads the CPTs from functions.php */
        $this->load_custom_post_types();

        if( is_array($this->custom_post_types) ) 
        {

            foreach($this->custom_post_types as $post_type_name => $options)
            {

                register_post_type($post_type_name, $options);

            }

        }

    }

    /**
     * This method will loop through the $custom_post_types array and generate the register_post_type function call.
     *
     */
    public function add_custom_taxonomies()
    {
        /* loads the custom taxonomies from functions.php */
        $this->load_custom_taxonomies();

        if( is_array($this->custom_taxonomies) ) 
        {

            foreach($this->custom_taxonomies as $taxonomy_name => $options)
            {

                $belongs_to_post_type = $options['belongs_to_post_type'];


                if( ! post_type_exists( $belongs_to_post_type ))
                {

                    add_action( 'admin_notices', function() use($taxonomy_name){

                        $class = "error";
                        $message = "The taxonomy you are trying to register in functions.php references a custom post type that does not exist.  Please make sure you are properly registering your custom post type in the functions.php load_custom_post_types method.  The CPT from this error is called: <strong>{$taxonomy_name}</strong>.";
                        echo"<div class=\"$class\"> <p>$message</p></div>"; 

                    });
                }
                
                unset( $options['belongs_to_post_type'] );

                register_taxonomy($taxonomy_name, $belongs_to_post_type, $options);

            }

        }

    }
    /**
    * Files to Include
    *
    * The $files_to_load array determines the code included in the theme by default.
    * Add or remove files to the array as needed.
    *
    */
    public function load_files()
    {


        $files_to_load = array(
            'inc/Helper.php'
        );

        foreach ($files_to_load as $file)
        {
            require_once $file;
        }

    }

    public function load_wp_cli_commands()
    {
        if ( defined( 'WP_CLI' ) && \WP_CLI )
        {

            $files_to_load = array(
                'wp-cli-commands/DevMode.php',
                'wp-cli-commands/UpdateSiteUrl.php'
            );

            foreach ($files_to_load as $file)
            {
                require_once $file;
            }

             \WP_CLI::add_command( 'devmode', '\DevMode_Command' );
             \WP_CLI::add_command( 'url', '\UpdateSiteUrl_Command' );
        }


    }

    /**
     * Clean up the_excerpt()
     */
    public function excerpt_more($more)
    {


        if( !is_null($this->excerpt_text) )
        {

            return '... <a href="' . get_permalink() . '">' . $this->excerpt_text . '</a>';

        }
        else
        {
                
            return '...';

        }



      
    }

    public function load_additional_head_js_css()
    {
        echo get_field('header_css_js_custom', 'option');
    }

    public function load_additional_footer_js()
    {

        echo get_field('custom_js_footer', 'option');

    }


    /**
    * Loads the theme scripts.
    *
    */
    public function load_scripts()
    {   
        if($this->include_jquery === false)
        {
            wp_deregister_script('jquery');
            wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/public/js/theme.js', null, $this->version, true );

        }
        else
        {
            wp_enqueue_script( $this->theme_name .'-script' , get_template_directory_uri() . '/public/js/theme.js', array('jquery'), $this->version, true );
        }

    }


    /**
    * Loads the theme styles.
    *
    */
    public function load_styles()
    {
        wp_enqueue_style( $this->theme_name .'-style', get_template_directory_uri() . '/public/css/theme.css',array(), $this->version);

    }



    /**
    * Display the specified resource.
    *
    * @param  int  
    * @return Response
    */
    protected function load_thumbnail_support()
    {


        if($this->load_thumbnail_support === true)
        {
            add_theme_support( 'post-thumbnails' );
        }
        

        foreach($this->image_sizes as $size)
        {

            add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);

        }
    }


    /**
    * Returms the path to the favicon files for the head of the site.
    * 
    * @param  $faviconPath - this should be absolute path to the favicon file.
    * @param  $additionalIconPath:
    *           - array('72x72' => 'path/to/image.png', '144x144' => 'path/to/image')  
    * @return HTML output
    */
    public function load_favicons()
    {

        $output = '';    

        $faviconPath = get_field('favicon','option');
        $otherIcons  = get_field('other_icons','option');

        if($faviconPath)
        {
            $output .= "<link rel='shortcut icon' href='{$faviconPath}' type='image/x-icon'>\n";
        }

        if($otherIcons)
        {
            foreach($otherIcons as $icon)
            {


                $output .= "<link rel='apple-touch-icon' type='image/png' sizes='{$icon['size']}' href='{$icon['image']}'>\n";

            }    
        }

        echo $output;
    }


    /**
    * Loads the menus.
    *
    * You will need to set the $menus param in the set_menus method in functions.php 
    * @return Response
    */
    protected function load_menu_support()
    {

        add_theme_support( 'menus' );

        register_nav_menus( $this->menus );
    }


    /**
    * Loads the blade template engine.
    *
    */
    protected function load_blade_templating()
    {

        if( !class_exists('WP_Blade_Main_Controller') )
        {
            include_once( 'blade/blade.php' );       
        }

    }


    /**
    * Clears the blade view cache in development
    *
    */
    public function clear_blade_cache()
    {


        if(defined('WP_DEBUG') && WP_DEBUG === true)
        {

            $cachedViewsDirectory = WP_BLADE_ROOT . 'storage/views/';


            $files = glob($cachedViewsDirectory.'*');

            foreach($files as $file) {
                if(is_file($file)) {
                    @unlink($file);
                }
            }

        }

    }


    /**
    * Loads ACF if the plugin is not included.
    */
    public function include_advanced_custom_fields()
    {   


        if( ! class_exists('acf') )
        {

            add_filter('acf/settings/path', array($this, 'my_acf_settings_path') );
            add_filter('acf/settings/dir', array($this, 'my_acf_settings_dir') );
            
            

            include_once( 'acf/acf.php'); 


            if(WP_DEBUG == false && $this->force_enable_acf_option_panel === false)
            {
                
                add_filter('acf/settings/show_admin', '__return_false');        
            
            }
            

        }    

        add_filter('acf/format_value',array( $this,'parse_template_directory'), 10, 3);

        /* Load WPCLI Interface for ACF */
        include_once('acf-wpcli/advanced-custom-fields-wpcli.php');

        if(function_exists('acf_wpcli_register_groups'))
        {
            acf_wpcli_register_groups();
        }
    }

    public function parse_template_directory( $value, $post_id, $field )
    {

        $searchAndReplace = array(

            '{IMAGEPATH}' => get_template_directory_uri() . '/public/images'

        );

        foreach($searchAndReplace as $search => $replace)
        {
            $value = str_replace($search, $replace, $value);
        }

        return $value;
    }

     
    public function my_acf_settings_path( $path ) {
     
        $path = get_stylesheet_directory() . '/core/acf/';
        
        return $path;
        
    }
     
     
    public function my_acf_settings_dir( $dir ) {
     
        $dir = get_stylesheet_directory_uri() . '/core/acf/';
        
        return $dir;
        
    }
     
    /**
    * Clean code = better code.
    */
    protected function remove_junk()
    {

        // Remove "Link" canonical HTTP header
        remove_action('template_redirect', 'wp_shortlink_header', 11);

        add_filter('wp_headers', array($this,'remove_x_pingback') );

        // remove junk from head
        remove_action('wp_head', 'rel_canonical'); 
        remove_action('wp_head', 'rsd_link'); 
        remove_action('wp_head', 'wp_generator'); 
        remove_action('wp_head', 'feed_links', 2); 
        remove_action('wp_head', 'index_rel_link'); 
        remove_action('wp_head', 'wlwmanifest_link'); 
        remove_action('wp_head', 'feed_links_extra', 3); 
        remove_action('wp_head', 'start_post_rel_link', 10, 0); 
        remove_action('wp_head', 'parent_post_rel_link', 10, 0); 
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 

    }

    /**
    * Uneeded pingback header.
    */
    public function remove_x_pingback($headers) {

        unset($headers['X-Pingback']);

        return $headers;
    }

}