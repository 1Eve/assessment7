<?php

/**
*@package assessment7 
*/
namespace Inc\Pages;

use Inc\Base\BaseController;
use Inc\Api\SettingsApi;
use \Inc\Api\CallBacks\AdminCB;

class AdminDashboard extends BaseController
{
    public function __construct()
    {
        $this->mainmenu = [
            [
                'page_title' => 'Create Employee',
                'menu_title' => 'Create Employee',
                'capability' => 'manage_options',
                'menu_slug' => 'create_employee',
                'callback' => [$this, 'createEmployeePage'],
                'icon_url' => 'dashicons-plus',
                'position' => 110
            ],
            [
                'page_title' => 'View Employees',
                'menu_title' => 'View Employees',
                'capability' => 'manage_options',
                'menu_slug' => 'view_employees',
                'callback' => [$this, 'viewEmployeesPage'],
            ]
        ];
    }

    public function register()
    {
        $this->settings_api = new SettingsApi();
        $this->settings_api->addPages($this->mainmenu)->register();
    }

    public function createEmployeePage()
    {

        echo '<h1>Create Employee Page</h1>';
     
    }

    public function viewEmployeesPage()
    {
       
        echo '<h1>View Employees Page</h1>';
      
    }
}