<?php

/**
 * Adds the ability for v-card to be uploaded to media uploader.  Add additional mime types here as needed.
 */
add_filter('upload_mimes', function ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
});
