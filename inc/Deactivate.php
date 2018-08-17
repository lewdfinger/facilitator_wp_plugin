<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/15/2018
 * Time: 8:14 PM
 */

namespace Inc;

class Deactivate {

    public static function deactivate(){
        flush_rewrite_rules();
    }
}