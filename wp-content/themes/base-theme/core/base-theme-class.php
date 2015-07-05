<?php

abstract class base_theme_class {

    /* Set this to the version of your theme */
    public $version;

    /* The name of the theme */
    public $theme_name;

    /* Set this to true to include a contact form post type */
    public $contact_form_post_type;


    /* You can set this to false if the theme javascript includes jQuery */
    public $include_jQuery;

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

    /**
    * Bootstrap function for the class.
    * Loads everything up based off of various parameters you can set.
    */
    public function bootstrap()
    {   


        add_action('init', [$this, 'load_files']);

        $this->load_blade_templating();
        
        $this->include_advanced_custom_fields();
        
        /* Enqueue the Theme Script */
        add_action( 'wp_enqueue_scripts', [$this, 'load_scripts'] );


        /* Enqueue the Theme Stylesheet */
        add_action( 'wp_enqueue_scripts', array($this, 'load_styles') );


        add_filter('excerpt_more', array($this,'new_excerpt_more'));
        add_filter('get_the_excerpt', array($this,'custom_excerpt'));


        if(method_exists($this, 'load_shortcodes'))
        {

            $this->load_shortcodes();

        }



        if(method_exists($this, 'load_custom_post_types'))
        {

            $this->load_custom_post_types();

        }

        if(method_exists($this, 'set_image_sizes'))
        {   
            $this->set_image_sizes();
            $this->load_thumbnail_support();
        }

        if(method_exists($this, 'set_menus'))
        {   
            $this->set_menus();
            $this->load_menu_support();
        }

        if($this->contact_form_post_type === true)
        {
            add_action( 'init', array($this,'register_contact_form_post_type') );
            add_action( 'wp_ajax_contact_form', array($this,'contact_form') );
            add_action( 'wp_ajax_nopriv_contact_form', array($this,'contact_form') );    
        }

        $this->remove_junk();
    }


    /**
    * Files to Include
    *
    * The $files_to_load array determines the code included in the theme by default.
    * Add or remove files to the array as needed.
    *
    * @param  int  
    * @return Response
    */
    public function load_files()
    {


        $files_to_load = array(
            'inc/blade.php',                  // Load Laravel's Blade Templating Engine
            'inc/utils.php',                  // Utility functions
            'inc/init.php',                   // Initial theme setup and constants
            'inc/config.php',                 // Configuration
            'inc/activation.php',             // Theme activation
            'inc/titles.php',                 // Page titles
            'inc/wp_bootstrap_navwalker.php', // Bootstrap Nav Walker (From https://github.com/twittem/wp-bootstrap-navwalker)
            'inc/gallery.php',                // Custom [gallery] modifications
            'inc/comments.php',               // Custom comments modifications
            'inc/scripts.php',                // Scripts and stylesheets
            'inc/extras.php'                  // Custom functions
        );

        $files_to_load = [
            'core/helpers.php'
        ];

        foreach ($files_to_load as $file)
        {
            if (!$filepath = locate_template($file))
            {

                trigger_error(sprintf(__('Error locating %s for inclusion', 'cutlass'), $file), E_USER_ERROR);

            }

            require_once $filepath;
        }
        unset($file, $filepath);
    }


    /**
    * Loads all of the custom post type files.
    *
    * @param  int  
    * @return Response
    */
    public function load_custom_post_types()
    {


    }

    /**
    * Helper function that returns the first word of a string.
    *
    * @param  string  
    * @return First word of the string param
    */
    public function get_first_word($string)
    {

        $parts = explode(" ", $string);


        return $parts[0];
    }

    /**
    * Loads the contact form custom post type.
    *
    */
    public function register_contact_form_post_type()
    {

        $args = array(

            'label' => 'Contact Form Submissions',
            'description' => 'This post type holds all of the contact form submissions',
            'public' => false,
            'show_ui' => true,
            'supports' => array(
                'title'
                )
            );

        register_post_type('contact_form',$args);
    }


    /**
    * AJAX Endpoint for contact form.
    * Post to admin-ajax.php with the action param as "contact_form"
    */
    public function contact_form()
    {
        header( "Content-Type: application/json" );
        if ( ! wp_verify_nonce( $_REQUEST['contact-form-nonce'] , 'contact-form-nonce' ) )
        {
            die ( json_encode( array('status' => 'Busted!') ) );    
        }


        $post_id = wp_insert_post(array(
            'post_status' => 'publish',
            'post_type' => 'contact_form',
            'post_title' => "New Contact Form Submission from {$_REQUEST['first_name']}"
            ));

        foreach($_REQUEST as $key => $value)
        {
            update_field($key, $value, $post_id);
        }

        $response = json_encode(array('status' => 'success'));



        die($response); 
    }


    /**
    * Helper method that returns image URL.
    *
    * @param  $name - image name  
    * @return url/to/image
    */
    public function image( $name )
    {

        return get_template_directory_uri() . "/images/{$name}";

    }


    /**
    * Return Breadcrumbs
    *
    * @param  int  
    * @return Response
    */
    public function breadcrumbs()
    {
        if ( function_exists('yoast_breadcrumb') )
        {
            $breadcrumbs = yoast_breadcrumb( '<li>', '</li>', false );

            $breadcrumbs = str_replace( '|', '</li><li>', $breadcrumbs );


            echo "<ul>{$breadcrumbs}</ul>";
        }

    }


    /**
    * Loads the theme scripts.
    *
    */
    public function load_scripts()
    {   
        if($this->include_jQuery === false)
        {
            wp_deregister_script('jquery');
            wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/js/theme.js', null, $this->version, true );

        }
        else
        {
            wp_enqueue_script( $this->theme_name .'-script' , get_template_directory_uri() . '/js/theme.js', array('jquery'), $this->version, true );
        }

    }


    /**
    * Loads the theme styles.
    *
    */
    public function load_styles()
    {
        wp_enqueue_style( $this->theme_name .'-style', get_template_directory_uri() . '/css/theme.css');

    }


    /**
    * Changes the theme's default excerpt mark.
    *
    */
    public function new_excerpt_more( $more ) {
        return '...';
    }

    /* remove [...] and Continue Reading from manual/custom excerpt 
    (fix for qa plugin's filters getting in the way even if we don't use FAQ excerpts) */
    public function custom_excerpt($output) {
        $excerpt = strip_tags( str_replace('Continue reading <span class="meta-nav">&rarr;</span>', '', $output) );
        return $excerpt;
    }

    /* Custom excerpt lengths (usage: echo excerpt(100); ) */
    public function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
    }


    /**
    * Display the specified resource.
    *
    * @param  int  
    * @return Response
    */
    protected function load_thumbnail_support()
    {

        add_theme_support( 'post-thumbnails' );

        foreach($this->image_sizes as $size)
        {

            add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);

        }
    }


    /**
    * Returns h1 field from a post or page.
    *
    * @param  $id   - integer
    * @param  $echo - boolean  
    * @return title
    */
    public function h1_title($id=false, $echo=true){
        global $post;

        $title = "";
        if($id)
        {
            $title = get_field('h1_title', $id)? get_field('h1_title', $id) : get_the_title($id);   
        }
        else
        {
            $title = get_field('h1_title', $post->ID)? get_field('h1_title', $post->ID) : get_the_title($post->ID);
        }

        if($title != "")
        {

            if($echo)
            {
                echo $title;
            }
            else
            {
                return $title;
            }

        }
        else
        {

            return false;

        }
    }

    /**
    * Returns the thumbnail with a caption.
    */
    public function the_post_thumbnail_caption() {
        global $post;

        $thumbnail_id    = get_post_thumbnail_id($post->ID);
        $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

        if ($thumbnail_image && isset($thumbnail_image[0])) {
            echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
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
    public function load_favicons($faviconPath, $additionalIcons = array())
    {

        $output = "<link rel='shortcut icon' href='{$faviconPath}' type='image/x-icon'>\n";

        foreach($additionalIcons as $size => $iconPath)
        {


            $output .= "<link rel='apple-touch-icon' type='image/png' sizes='{$size}' href='{$iconPath}'>\n";

        }


        return $output;
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

        /*

        - Not sure if this is needed anymore.  7/1/2015
        $upload = wp_upload_dir();

        $cachePath = $upload['basedir'] . '/blade-cache';


        if (!file_exists( $cachePath )) {
        mkdir($cachePath, 0777, true);
        }
        if(function_exists('blade_set_storage_path'))
        {
        blade_set_storage_path( $cachePath );
        }*/

    }

    /**
    * Loads ACF if the plugin is not included.
    */
    public function include_advanced_custom_fields()
    {   


        if( ! class_exists('acf') )
        {

            include_once( 'advanced-custom-fields/acf.php'); 

        }    

        if( ! class_exists('acf_repeater_plugin') )
        {

            include_once( 'acf-repeater/acf-repeater.php');

        }

        if( ! class_exists('acf_options_page_plugin') )
        {

            include_once( 'acf-options-page/acf-options-page.php');

        }


        /* Load WPCLI Interface for ACF */
        include_once('acf-wpcli/advanced-custom-fields-wpcli.php');

        if(function_exists('acf_wpcli_register_groups'))
        {
            acf_wpcli_register_groups();
        }
    }

    /**
    * Uneeded pingback header.
    */
    public function remove_x_pingback($headers) {

        unset($headers['X-Pingback']);

        return $headers;
    }

    /**
    * Clean code = better code.
    */
    protected function remove_junk()
    {

        // Remove "Link" canonical HTTP header
        remove_action('template_redirect', 'wp_shortlink_header', 11);

        add_filter('wp_headers', [$this,'remove_x_pingback'] );

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

}