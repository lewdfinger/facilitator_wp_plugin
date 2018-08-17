<?php

/*
 Plugin Name: RAHNA Facilitator
 Description:  Dashboard for RAH Anesthesia Coordinator
 Version:      1.0
 Author:       Keith Drader
 Author URI:   mailto://kdrader@protonmail.com
 */

//


/*defined('poopy');*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}

function activate_rahna_facilitator_plugin(){
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__, 'activate_rahna_facilitator_plugin');

function deactivate_rahna_facilitator_plugin(){
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_rahna_facilitator_plugin');

