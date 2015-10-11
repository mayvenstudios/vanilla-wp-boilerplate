<?php


function asset($name)
{

    return Helper::asset($name);

}



function posts_link_attributes() {
    return 'class="btn btn-load"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');



function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    return $existing_mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');



/**
* AJAX Endpoint for contact form.
* Post to admin-ajax.php with the action param as "contact_form"
*/
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

    //Sample gforms entry

    $entry['form_id'] = $_REQUEST['form_id'];
    $entry['status'] = 'active';


    $entry['1'] = $_REQUEST['name'];
    $entry['2'] = $_REQUEST['company'];
    $entry['3'] = $_REQUEST['phone'];
    $entry['4'] = $_REQUEST['email'];
    $entry['5'] = $_REQUEST['message'];

    GFAPI::add_entry( $entry );*/

    $response = json_encode(array('status' => 'success'));

    die($response); 
}

add_action( 'wp_ajax_contact_form', 'custom_contact_form_submission' );
add_action( 'wp_ajax_nopriv_contact_form', 'custom_contact_form_submission' );