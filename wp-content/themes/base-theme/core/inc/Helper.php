<?php

class Helper {

    /**
    * Helper function that returns the first word of a string.
    *
    * @param  string  
    * @return First word of the string param
    */
    public static function get_first_word($string)
    {

        $parts = explode(" ", $string);
        
        return $parts[0];
    }


    /**
     * Page titles
     */
    public static function index_title()
    {
      if (is_home()) {
        if (get_option('page_for_posts', true)) {
          return get_the_title(get_option('page_for_posts', true));
        } else {
          return __('Latest Posts', 'default-theme');
        }
      } elseif (is_archive()) {
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        if ($term) {
          return apply_filters('single_term_title', $term->name);
        } elseif (is_post_type_archive()) {
          return apply_filters('the_title', get_queried_object()->labels->name);
        } elseif (is_day()) {
          return sprintf(__('Daily Archives: %s', 'default-theme'), get_the_date());
        } elseif (is_month()) {
          return sprintf(__('Monthly Archives: %s', 'default-theme'), get_the_date('F Y'));
        } elseif (is_year()) {
          return sprintf(__('Yearly Archives: %s', 'default-theme'), get_the_date('Y'));
        } elseif (is_author()) {
          $author = get_queried_object();
          return sprintf(__('Author Archives: %s', 'default-theme'), apply_filters('the_author', is_object($author) ? $author->display_name : null));
        } else {
          return single_cat_title('', false);
        }
      } elseif (is_search()) {
        return sprintf(__('Search Results for %s', 'default-theme'), get_search_query());
      } elseif (is_404()) {
        return __('Not Found', 'default-theme');
      } else {
        return get_the_title();
      }
    }

    /**
    * Helper method that returns image URL.
    *
    * @param  $name - image name  
    * @return url/to/image
    */
    public static function image( $name )
    {

        return get_template_directory_uri() . "/public/images/{$name}";

    }


    /**
    * Return Breadcrumbs
    *
    * @param  int  
    * @return Response
    */
    public static function breadcrumbs()
    {
        if ( function_exists('yoast_breadcrumb') )
        {
            $breadcrumbs = yoast_breadcrumb( '<li>', '</li>', false );

            $breadcrumbs = str_replace( '|', '</li><li>', $breadcrumbs );


            echo "<ul>{$breadcrumbs}</ul>";
        }

    }

    /**
    * Returns the thumbnail with a caption.
    */
    public static function the_post_thumbnail_caption() {
        global $post;

        $thumbnail_id    = get_post_thumbnail_id($post->ID);
        $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

        if ($thumbnail_image && isset($thumbnail_image[0])) {
            echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
        }
    }



}