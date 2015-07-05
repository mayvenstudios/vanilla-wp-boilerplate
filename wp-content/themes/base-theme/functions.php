<?php

/**
* Loads the base theme class.  The base_theme_class is extended here.
* Please see wiki documentation for full set of features and helpers available in the base_theme_class.
*/
include_once( 'core/base-theme-class.php' );  


class custom_theme_class extends base_theme_class {

    var $version = '1.0';

    var $theme_name = THEME_NAME;

    var $contact_form_post_type = true;

    var $include_jQuery = false;


    /* Load more custom post types here */
    public function load_custom_post_types()
    {

    }

    public function load_shortcodes()
    {

        /* This is a sample shortcode.  Please see full shortcode documentation. */
        add_shortcode( 'contact_form', [$this,'custom_shortcode_1'] );

    }

    /* Sample shortcode.  Please see full shortcode documentation */
    public function custom_shortcode_1( $atts )
    {

        return view('views/forms/contact-form')->with([

            'form_title' => 'Contact Us'

        ]);

    }

    public function set_menus()
    {

        $this->menus = [
            'main_nav' => 'Main Navigation', 
            'footer_nav' => 'Footer Navigation'
        ];
        
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


        $this->image_sizes[] = array(
            'name' => 'large-size',
            'width' => 1050,
            'height' => 9999,
            'crop' =>true
            );
    }

}

global $theme;   

$theme = new custom_theme_class;

$theme->bootstrap();