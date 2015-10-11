<?php


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




/**
* AJAX Endpoint for contact form.
* Post to admin-ajax.php with the action param as "contact_form"
* This can be used as a sample to create other AJAX endpoints in the theme.
*/
add_action( 'wp_ajax_contact_form', 'custom_contact_form_submission' );
add_action( 'wp_ajax_nopriv_contact_form', 'custom_contact_form_submission' );
function custom_contact_form_submission()
{   

    $nonce = 'contact-form-nonce';

    header( "Content-Type: application/json" );
    if ( ! wp_verify_nonce( $_REQUEST[ $nonce ] , $nonce ) )
    {
        die ( json_encode( array('status' => 'Busted!') ) );
    }

    /*
    
    ...

    Do stuff here
    
    ...

    //Sample gforms entry using GFAPI class
    $response = GFAPI::add_entry( $_REQUEST );

    */

    if( ! is_wp_error( $response ) )
    {
        die( json_encode(array('status' => 'success') );
    }


    $error = array(
        'status' => 'error',
        'message' => $response->get_error_message()
    );
    
    die( json_encode($error) );

}