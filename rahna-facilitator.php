<?php

/* @package RahnaPlugin */

/*
 Plugin Name: RAHNA Facilitator
 Description:  Dashboard for RAH Anesthesia Coordinator
 Version:      1.0
 Author:       Keith Drader
 Author URI:   mailto://kdrader@protonmail.com
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//Load the Composer autoloader
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

//Run the class to instantiate all other necessary classes (services)
if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}

//Functions and hooks for activation/deactivation
function activate_rahna_facilitator_plugin(){
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__, 'activate_rahna_facilitator_plugin');

function deactivate_rahna_facilitator_plugin(){
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_rahna_facilitator_plugin');

