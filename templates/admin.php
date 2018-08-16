<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/15/2018
 * Time: 3:03 PM
 */
if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
?>
<H1>RAHNA Facilitator</H1>