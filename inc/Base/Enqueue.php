<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/15/2018
 * Time: 11:41 PM
 */

namespace Inc\Base;

class Enqueue extends BaseController{

    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueuethis'));
    }

    public function enqueuethis() {
        //enqueue all our scripts
        wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/mystyle.css');
        wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/myscripts.js');
    }
}