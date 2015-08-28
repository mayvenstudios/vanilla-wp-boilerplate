<?php

namespace BaseTheme;

/**
* Loads the base theme class.  The base_theme_class is extended here.
* Please see wiki documentation for full set of features and helpers available in the base_theme_class.
*/
include_once( 'core/base-theme-class.php' );  

class Theme extends base_theme_class {

    var $version = '1.0';

    var $theme_name = 'THEME_NAME_HERE';

    var $include_jquery = true;

    var $load_options_panel = true;

    var $disabled_theme_editor = false;

    var $load_thumbnail_support = true;

    var $excerpt_text = 'Read More';

    /* Load more custom post types here */
    public function load_custom_post_types()
    {

    }

    public function load_shortcodes()
    {

        /* This is a sample shortcode.  Please see full shortcode documentation. */
       //add_shortcode( 'contact_form', array($this,'custom_shortcode_1') );

    }



    /* Sample shortcode.  Please see full shortcode documentation */
    public function custom_shortcode_1( $atts )
    {

        return view('views/forms/contact-form')->with(array(

            'form_title' => 'Contact Us'

        ));

    }


    public function load_sidebars()
    {

        /*register_sidebar(array(
            'name'          => 'Primary',
            'id'            => 'sidebar-primary',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));*/

        
    }

    public function load_options_panel()
    {

        acf_add_options_page(array(
            'page_title'    => 'Theme Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'theme-options-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true
        ));


        acf_add_options_sub_page(array(
            'page_title'    => 'JavaScript & CSS Options',
            'menu_title'    => 'Javascript / CSS',
            'parent_slug'   => 'theme-options-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header & Footer Options',
            'menu_title'    => 'Header / Footer',
            'parent_slug'   => 'theme-options-settings',
        ));

    }

    public function set_menus()
    {

        $this->menus = array(
            'main_nav' => 'Main Navigation', 
            'footer_nav' => 'Footer Navigation'
        );
        
    }

    /**
    * Set the image size array.
    *
    * $image_sizes[] = array('name' => 'image-size-name', 'width' => 600, 'height' => 400, 'crop' => true)  
    * set width/height to 9999 to not force that size.
    * set crop to false to not force the size.
    */
    public function set_image_sizes()
    {

        $this->image_sizes[] = array(
            'name' => 'medium-size',
            'width' => 600,
            'height' => 400,
            'crop' =>true
        );
    }

}

$theme = new \BaseTheme\Theme;

