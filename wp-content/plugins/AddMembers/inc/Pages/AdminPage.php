<?php

/**
 * @package AddMembersPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class AdminPage extends BaseController{

    public $settings;

    public $pages;

    function register(){
        $this->settings = new SettingsApi();

        $this->setPages();


        $this->settings->AddPages( $this->pages )->register();
    }

    public function setPages(){ 
        $this->pages= [
        [
            'page_title'=> 'Add Members',
            'menu_title'=> 'Add Members',
            'capability' => 'manage_options', 
            'menu_slug'=> 'add_members',
            'callback'=> function(){ return require_once( "$this->plugin_path/templates/addmember.php");}  ,
            'icon_url'=> 'dashicons-plus',
            'position'=> 200
        ],
       
            [
                'page_title'=> 'View Members',
                'menu_title'=> 'View Members',
                'capability' => 'manage_options',
                'menu_slug'=> 'view_members',
                'callback'=> function(){ return require_once( "$this->plugin_path/templates/viewmembers.php");} ,
                'icon_url'=> 'dashicons-list-view',
                'position'=> 201
            ]
        ];
    }

    //  function addpage(){
    //     add_menu_page('Add Members', 'Add Members', 'manage_options', 'add_member', [$this, 'addmembers'], 'dashicons-welcome-write-blog', 110);
    // }

    // function addmembers(){
    //     require_once $this->plugin_path.'templates/addmember.php';  
    // }

}