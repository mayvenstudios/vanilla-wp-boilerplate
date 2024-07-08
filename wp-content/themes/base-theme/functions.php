<?php

require( 'theme-config.php' );

// Add the Super Administrator role to the project.
function add_custom_role() {
    $admin_role = get_role('administrator');

    $admin_capabilities = $admin_role->capabilities;

    add_role('super_administrator', 'Super Administrator', $admin_capabilities);
}

add_action('init', 'add_custom_role');

// Add the Super Administrator role to the user if they are the only user in the database.
function change_single_user_role_to_super_admin() {
    $users = get_users();

    if (count($users) === 1) {
        $user = $users[0];
        $user->set_role('super_administrator');
    }
}

add_action('init', 'change_single_user_role_to_super_admin');

// Allow only Super Administrators to see and manage plugins.
function hide_plugins_menu() {
 
    if (current_user_can('super_administrator')) {
        return;
    }

    remove_menu_page('plugins.php');
}
add_action('admin_menu', 'hide_plugins_menu', 999);