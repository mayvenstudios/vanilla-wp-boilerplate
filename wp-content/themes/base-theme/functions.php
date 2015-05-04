<?php

include_once( 'core/base-theme-class.php' );  

class custom_theme_class extends base_theme_class {

    var $version = '1.0';

    var $theme_name = 'theme-name';

    var $contact_form_post_type = true;

    var $location_post_type = true;

    var $include_jQuery = false;


    /* Load more custom post types here */
    public function load_custom_post_types()
    {
        
        register_post_type( 'testimonial',
            array(
                'labels' => array(
                    'name' => __( 'Testimonials' ),
                    'singular_name' => __( 'Testimonial' )
                ),
                'public' => false,
                'show_ui' => true,
                'has_archive' => false,
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'revisions' ),
                'rewrite' => false
            )
        ); 
        $labels = array(
              'name'              => _x( 'Categories', 'taxonomy general name' ),
              'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
              'search_items'      => __( 'Search Categories' ),
              'all_items'         => __( 'All Categories' ),
              'parent_item'       => __( 'Parent Category' ),
              'parent_item_colon' => __( 'Parent Category:' ),
              'edit_item'         => __( 'Edit Category' ),
              'update_item'       => __( 'Update Category' ),
              'add_new_item'      => __( 'Add New Category' ),
              'new_item_name'     => __( 'New Category' ),
              'menu_name'         => __( 'Categories' )
         );
         $args = array(
              'labels' => $labels,
              'hierarchical' => true,
              'rewrite' => array('with_front' => false), 
              //'rewrite' => array('slug' => 'case-results/category', 'with_front' => false),
              'public' => false,
              'show_ui' => true,
              'show_admin_column' => true
         );
         register_taxonomy( 'testimonials-category', 'testimonial', $args );

    }

    public function load_shortcodes()
    {
        add_shortcode( 'contact_form', array($this,'custom_shortcode_1') );
    }

    public function custom_shortcode_1( $atts )
    {

        ob_start();

        get_template_part('forms/form');

        return ob_get_clean(); 
    
    }

    public function set_menus()
    {

        $this->menus = array(
            'main_nav' => 'Main Navigation', 
            'footer_nav' => 'Footer Navigation', 
            'mobile_drop' => 'Mobile Drop Menu'
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