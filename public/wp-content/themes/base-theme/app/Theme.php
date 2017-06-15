<?php

namespace App;

class Theme extends \Core\Theme {

    /**
     * Load Custom Post Types
     * Extended CPTs https://github.com/johnbillion/extended-cpts/wiki
     */
    public function loadPostTypes()
    {
        /*
        // Sample Custom Post Type - Add as many as you'd like 
        register_extended_post_type( 'story', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => true,

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),

            # Add some custom columns to the admin screen:
            'admin_cols' => array(
                'featured_image' => array(
                    'title'          => 'Illustration',
                    'featured_image' => 'thumbnail'
                ),
                'published' => array(
                    'title'       => 'Published',
                    'meta_key'    => 'published_date',
                    'date_format' => 'd/m/Y'
                ),
                'genre' => array(
                    'taxonomy' => 'genre'
                )
            ),

            # Add a dropdown filter to the admin screen:
            'admin_filters' => array(
                'genre' => array(
                    'taxonomy' => 'genre'
                )
            )

        ), array(

            # Override the base names used for labels:
            'singular' => 'Story',
            'plural'   => 'Stories',
            'slug'     => 'stories'

        ) );
        */
        

    }

    /**
     * Load Custom Taxonomies
     * Extended Taxos https://github.com/johnbillion/extended-taxos
     */
    public function loadCustomTaxonomies()
    {

        // Sample Custom Taxonomy - Add as many as you'd like 

        /*

        register_extended_taxonomy( 'story', 'post', array(

            # Use radio buttons in the meta box for this taxonomy on the post editing screen:
            'meta_box' => 'radio',

            # Show this taxonomy in the 'At a Glance' dashboard widget:
            'dashboard_glance' => true,

            # Add a custom column to the admin screen:
            'admin_cols' => array(
            'updated' => array(
                'title'       => 'Updated',
                'meta_key'    => 'updated_date',
                'date_format' => 'd/m/Y'
            ),
            ),

            ), array(

            # Override the base names used for labels:
            'singular' => 'Story',
            'plural'   => 'Stories',
            'slug'     => 'tales'

        ) );

        */
    }

    /**
     * Load Short Codes
     */
    public function loadShortCodes()
    {

        //This is a sample shortcode.  Please see full shortcode documentation. 
        
        /* */

        /*add_shortcode( 'contact_form', function($atts) {

            return view('forms/contact-form')->with(array(

                'form_title' => 'Contact Us',
                'atts' => $atts

            ));

        });*/

       

    }


    /**
     * Load Sidebars
     */
    public function loadSidebars()
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

    /**
     * Load options panel
     */
    protected function loadOptionsPanel()
    {

        acf_add_options_page(array(
            'page_title'    => 'Theme Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'theme-options-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header & Footer Options',
            'menu_title'    => 'Header / Footer',
            'parent_slug'   => 'theme-options-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'JavaScript & CSS Options',
            'menu_title'    => 'Javascript / CSS',
            'parent_slug'   => 'theme-options-settings',
        ));
    }
}