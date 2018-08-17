<?php
/**
 * Created by PhpStorm.
 * User: keith
 * Date: 8/15/2018
 * Time: 8:13 PM
 */
namespace Inc;

class Activate{

    public static function activate(){
        flush_rewrite_rules();
    }
}