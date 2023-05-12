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

    public function __construct(){
        $this->settings = new SettingsApi();
        
    $this->pages= [
        [
            'page_title'=> 'Add Members',
            'menu_title'=> 'Add Mmembers',
            'capability' => 'manage_options',
            'menu_slug'=> 'add_members',
            'callback'=> function(){
                echo '<h2> AddMembers </h2>';
            },
            'icon_url'=> 'dashicons-plus',
            'position'=> 20
        ],
        [
            'page_title'=> 'View Members',
            'menu_title'=> 'View Members',
            'capability' => 'manage_options',
            'menu_slug'=> 'view_members',
            'callback'=> function(){
                echo '<h2> ViewMembers </h2>';
            },
            'icon_url'=> 'dashicons-list-view',
            'position'=> 21
        ]
    ];
    }

    function AddMembers(){
        $this->settings->AddPages( $this->pages )->AddMembers();
    }

}