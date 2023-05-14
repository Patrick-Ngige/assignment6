<?php
/**
 * @package AddMembersPlugin
 */

/*
    Plugin Name: AddMembers
    Plugin URI: http://addmembers.org
    Description: A plugin to add members 
    Version: 1.0.0
    Author: PK
    Author URI: http://pk.org
    Licence: GPLv2 
*/

// security check
defined('ABSPATH') or die('Security breaches identified');


// Checking if composer exists
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');

}

function activate_AddMembersPlugin(){
    Inc\Base\Activate::activate();
}

function deactivate_AddMembersPlugin(){
    Inc\Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_AddMembersPlugin');

register_deactivation_hook(__FILE__, 'deactivate_AddMembersPlugin');


//Considering all classes as a service
if(class_exists('Inc\\Init')){
    // echo 'jhgjh';
    Inc\Init::register_services(); 
}