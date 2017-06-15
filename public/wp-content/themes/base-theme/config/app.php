<?php

return [

    /**
     * Theme version
     */
    'version' => '1.0',

    /**
     * Theme name
     */
    'name' => 'base-theme',

    /**
     * Allows you to disable WordPress from including jQuery by default.
     * You should only set this to value if your files include jQuery.
     */
    'include_jquery' => false,

    /**
     * This is a boolean that determines whether or not to load the custom options panel
     * The custom options panel can be set in the load_options_panel method
     */
    'load_options_panel' => true,

    /**
     * If you want to force disable to WP theme editor, set this to true.
     * Since we keep our WP themes in version control, we set this to true by default.
     */
    'disabled_theme_editor' => true,

    /**
     * Toggle featured image support on your posts and pages
     */
    'load_thumbnail_support' => true,

    /**
     * This allows you to edit the default text that appears with post excerpts.
     * If you set this to null, a simple "..." will output at the end of each excerpt.
     */
    'excerpt_text' => 'Read More',

    /**
     * By default, the theme will disable the ACF Options menu in wp-admin, unless WP_DEBUG is set to true.
     * If you want to force enable to ACF options panel to display, you can set this variable as true
     */
    'force_enable_acf_option_panel' => true,

    /**
     * Set the image size array.
     *
     * $image_sizes[] = ['name' => 'image-size-name', 'width' => 600, 'height' => 400, 'crop' => true]
     * set width/height to 9999 to not force that size.
     * set crop to false to not force the size.
     */
    'image_sizes' => [
        [
            'name' => 'medium-size',
            'width' => 600,
            'height' => 400,
            'crop' =>true
        ]
    ],

    'menus' => [
        'main_nav' => 'Main Navigation',
        'footer_nav' => 'Footer Navigation'
    ]
];