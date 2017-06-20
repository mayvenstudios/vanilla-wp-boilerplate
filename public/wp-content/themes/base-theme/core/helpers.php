<?php
use Illuminate\Support\HtmlString;

if(!function_exists('asset')) {
    /**
     * Generate an asset path for the file.
     *
     * @param string  $path
     * @return string
     */

    function asset($path)
    {
        return get_template_directory_uri() . "/resources/assets/{$path}";
    }
}

if(!function_exists('assetImage')) {
    /**
     * Wrapper for asset method that returns files from "images" folder
     *
     * @param $path - name of the image inside asset/images/ folder
     * @return string full image uri path
     */
    function assetImage($path)
    {
        return asset("images/$path");
    }
}

if (!function_exists('mix')) {

    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string $path
     *
     * @return \Illuminate\Support\HtmlString
     *
     * @throws \Exception
     */
    function mix($path)
    {
        static $manifest;

        if (!starts_with($path, '/')) {
            $path = "/{$path}";
        }

        if (!$manifest) {
            if (!file_exists($manifestPath = __DIR__ . '/../mix-manifest.json')) {
                throw new Exception('The Mix manifest does not exist.');
            }

            $manifest = json_decode(file_get_contents($manifestPath), true);
        }


        if (!array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your " .
                'webpack.mix.js output paths and try again.'
            );
        }

        return new HtmlString(get_template_directory_uri() . $manifest[$path]);
    }
}

if (!function_exists('unregister_post_type_forced')) {

    /**
     * Unregister post type. Allow removing built in types
     *
     * @param $type
     */
    function unregister_post_type_forced($type)
    {
        global $wp_post_types;
        $post_type_object = get_post_type_object($type);
        $post_type_object->remove_supports();
        $post_type_object->remove_rewrite_rules();
        $post_type_object->unregister_meta_boxes();
        $post_type_object->remove_hooks();
        $post_type_object->unregister_taxonomies();

        unset($wp_post_types[$type]);
    }
}

if (!function_exists('app')) {

    /**
     * Get the Application instance
     *
     * @return \Core\Theme
     */
    function app() {
        return App\Theme::getInstance();
    }
}

if(!function_exists('post')) {

    /**
     * Get the *current* custom post type object
     * return null if current post type is one of the default types
     *
     * @return null|\Core\PostType
     */
    function post() {
        /** @var WP_Post_Type $postType */
        $postType = get_post_type_object(get_post_type());
        return $postType->className ? (new $postType->className())->get() : null;
    }
}

if(!function_exists('collectInstances')) {
    /**
     * Create objects for each of the classNames
     * return collection of objects
     *
     * @param \Illuminate\Support\Collection $classNames
     *
     * @return \Illuminate\Support\Collection
     */
    function collectInstances(\Illuminate\Support\Collection $classNames) {
        return $classNames->map(function ($className) {
            return new $className;
        });
    }
}