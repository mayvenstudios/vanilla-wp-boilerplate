<?php
/**
* AJAX Endpoint for contact form.
* Post to admin-ajax.php with the action param as "contact_form"
* This can be used as a sample to create other AJAX endpoints in the theme.
* Add as many of these files in the /endpoints/ directory and they will automatically be loaded into your WP site.
*/
$action_param = 'contact_form';

add_action( 'wp_ajax_' . $action_param, 'custom_contact_form_submission' );
add_action( 'wp_ajax_nopriv_' . $action_param, 'custom_contact_form_submission' );

function custom_contact_form_submission()
{   

    $nonce = 'contact-form-nonce';

    if ( ! wp_verify_nonce( $_REQUEST[ $nonce ] , $nonce ) )
    {
        return wp_send_json(array('status' => 'Busted!'));
    }

    /*
    
    ...

    Do stuff here
    
    ...

    //Sample gforms entry using GFAPI class

    $entry = array();
    $entry['1'] = $_REQUEST['email'];
    $response = GFAPI::add_entry( $entry );
    GFAPI::send_notifications( GFAPI::get_form( $entry['form_id'] ), GFAPI::get_entry( $response ), 'form_submission' );

    */


    return ! is_wp_error($response)
        ? wp_send_json(array('status' => 'success'))
        : wp_send_json(array('status' => 'error', 'message' => $response->get_error_message()));
 

}