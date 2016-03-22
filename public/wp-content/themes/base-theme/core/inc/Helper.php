<?php

function asset($name)
{
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */
    return Helper::asset($name);

}

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

                if(get_field('h1_title', get_option('page_for_posts', true)))
                {
                
                    return get_field('h1_title', get_option('page_for_posts', true));
                
                } else {
                    
                    return get_the_title(get_option('page_for_posts', true));

                }
                
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
    * Helper method that returns a file from the public directory.
    *
    * @param  $name - path to asset
    * @return path/to/asset
    */
    public static function asset( $name )
    {

        return get_template_directory_uri() . "/assets/{$name}";

    }

    public static function image($attachment_id, $size = 'thumbnail', $attr = '') {

    $icon = false;
    $html = '';
    $image = wp_get_attachment_image_src($attachment_id, $size, $icon);
    if ( $image ) {
        list($src, $width, $height) = $image;
        $hwstring = image_hwstring($width, $height);
        $size_class = $size;
        if ( is_array( $size_class ) ) {
            $size_class = join( 'x', $size_class );
        }
        $attachment = get_post($attachment_id);
        $default_attr = array(
            'src'   => $src,
            'class' => "attachment-$size_class",
            'alt'   => trim(strip_tags( get_post_meta($attachment_id, '_wp_attachment_image_alt', true) )), // Use Alt field first
        );
        if ( empty($default_attr['alt']) )
            $default_attr['alt'] = trim(strip_tags( $attachment->post_excerpt )); // If not, Use the Caption
        if ( empty($default_attr['alt']) )
            $default_attr['alt'] = trim(strip_tags( $attachment->post_title )); // Finally, use the title

        $attr = wp_parse_args($attr, $default_attr);


        $attr = apply_filters( 'wp_get_attachment_image_attributes', $attr, $attachment, $size );
        $attr = array_map( 'esc_attr', $attr );
        $html = rtrim("<img ");
        foreach ( $attr as $name => $value ) {
            $html .= " $name=" . '"' . $value . '"';
        }
        $html .= ' />';
    }

    return $html;
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