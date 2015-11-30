<?php
/**
 * Implements example command.
 */
class UpdateSiteUrl_Command extends WP_CLI_Command {

    function __invoke( $args, $assoc_args ) {


        if(!isset($args[0]))
        {

            WP_CLI::error( 'You must include the domain that you want to set as the site url.' );
            
        }

        $url = 'http://' . rtrim($args[0],'/');

        exec("wp db query \"UPDATE wp_options SET option_value='{$url}' WHERE option_name='siteurl'  OR option_name='home';\"");
        
        WP_CLI::success( "Site URL updated." );
    }

}