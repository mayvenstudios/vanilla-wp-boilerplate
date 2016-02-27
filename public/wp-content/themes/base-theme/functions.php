<?php

require( 'theme-config.php' );  


/**
 * Customize the classes added to next/prev post links
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn btn-load"';
}



/**
 * Adds the ability for v-card to be uploaded to media uploader.  Add additional mime types here as needed.
 */
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    return $existing_mimes;
}