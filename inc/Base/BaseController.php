<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/16/2018
 * Time: 1:03 PM
 */

namespace Inc\Base;

class BaseController{

    public $plugin_path;
    public $plugin_url;
    public $plugin;

    function __construct(){

        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/rahna-facilitator.php'; //kludge
    }
}