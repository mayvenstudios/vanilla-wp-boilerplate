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

    const POSTS_PER_PAGE = 10;

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

    /**
     * Wrapper for asset method that returns files from "images" folder
     * @param $name - name of the image inside asset/images/ folder
     * @return path - full image file path
     */
     public static function assetImage( $name )
    {
        return self::asset('images/'.$name);
    }

    /**
     * Returns full image url from image ID
     *
     * @param $attachment_id - image ID
     * @param string $size - WP defined image size, "thumbnail" by default. Use "full" for full size image
     * @param bool|false $icon
     * @return mixed
     */
    public static function imageURL($attachment_id, $size = 'thumbnail', $icon = false){
        return wp_get_attachment_image_src($attachment_id, $size, $icon)[0];
    }

    /**
     * Creates a div with the image set as a background
     *
     * @param $attachment_id_or_url - use image ID or image URL
     * @param string $size - e.g. "full", "thumbnail" (by default)
     * @param array $attr - array of div attributes
     * @return string
     */
    public static function imageDiv($attachment_id_or_url, $size = 'thumbnail', $attr = NULL) {
        $htmlAttr = '';
        $htmlCls = '';
        $htmlStyle = $attachment_id_or_url;
        if(is_numeric($attachment_id_or_url)){
            $htmlStyle = self::imageURL($attachment_id_or_url, $size, $attr);
        }
        $htmlStyle = 'background-image: url('.$htmlStyle.');';

        if($attr){
            foreach ( $attr as $name => $value ) {
                if($name == 'class'){
                    $htmlCls .= ' '.$value;
                }else if($name == 'style'){
                    $htmlStyle .= ' '.$value;
                }else{
                    $htmlAttr .= " $name=" . '"' . $value . '"';
                }
            }
        }
        return "<div class='image$htmlCls' style='$htmlStyle' $htmlAttr ></div>";
    }

    /**
     * Creates a img tag from Image ID
     *
     * @param $attachment_id
     * @param string $size
     * @param string $attr
     * @return string
     */
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

    /**
     * When original PHP nl2br does not work use this one
     *
     * @param $input
     * @return mixed
     */
    public static function nl2br($input){
        return preg_replace("/(\r\n|\n|\r)/", "<br />", $input);
    }

    /**
     * Formats integer phone number to US format number string
     * @param $phone
     * @return string
     */
    public static function formatPhone($phone)
    {
        return "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6);
    }

    /**
     * Fetches domain name from any URL, useful for links on contact pages
     * @param $url
     * @return mixed
     */
    public static function getDomainName($url){
        try{
            $parts = parse_url($url);
            return $parts['host'];
        }catch (\Exception $e){}
        return $url;
    }

    /**
     * Extends WP query options array with pagination related options
     *
     * e.g.
     * $options = [
     *      'post_type' => 'post'
     * ];
     * Helper::pagination_options($options);
     * $the_query = new WP_Query($options);
     *
     * @param array $options - wp query options array
     * @param number $ppp - optional number of posts per page. if provided it will override default one
     * @return Nothing Passed options array will be updated by reference
     */
    public static function pagination_options(&$options = array(), $ppp = NULL)
    {
        $pagination = Helper::pagination(NULL, $ppp);
        $options['offset'] = $pagination->offset;
        $options['posts_per_page'] = !empty($ppp)? $ppp : self::POSTS_PER_PAGE;
    }

    /**
     * Returns an array with pagination data
     *
     * Usage:
     * $pagination = Helper::pagination($the_query);
     *
     * @param null $queryObject
     * @param null $postsPerPage - optional, it not provided, default ppp will be used instead
     * @return object Pagination object
     * @internal param the $items query items
     */
    public static function pagination($queryObject = NULL, $postsPerPage = NULL)
    {
        $total_pages = 0;
        $current_page = get_query_var('page');
        $current_page = $current_page ? $current_page : 1;

        $base_url = get_permalink();

        //Ensure that trailing slash is added
        $base_url = rtrim($base_url, '/') . '/';

        if ($queryObject) {
            $total_pages = $queryObject->max_num_pages;
        }

        $ppp = self::POSTS_PER_PAGE > 0 ? self::POSTS_PER_PAGE : 10;
        if(!empty($postsPerPage)){
            $ppp = $postsPerPage;
        }

        $offset = ($current_page - 1) * $ppp;

        return (object) array(
            'total_pages' => $total_pages,
            'current_page' => $current_page,
            'offset' => $offset,
            'base_url' => $base_url
        );
    }
}
