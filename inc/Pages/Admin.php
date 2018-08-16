<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/15/2018
 * Time: 8:38 PM
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController{

    function register(){
        add_action( 'admin_menu', array($this, 'add_admin_pages' ));
    }

    function add_admin_pages() {
       add_menu_page( 'Facilitator Options', 'Facilitator', 'manage_options',
           'rahna_facilitator', array($this, 'admin_index'));
    }

    function admin_index() {
       require_once $this->plugin_path . 'templates/admin.php';
    }


}