<?php
/**
 * @package AddMembers
 */

 namespace Inc\Base;
 class Activate{
    static function activate(){
        // AddMembers::addMembers();
        flush_rewrite_rules();
    }
 }