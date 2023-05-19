<?php

/**
 * @package assessment7
 */

namespace Inc\Pages;

use Inc\Base\BaseController;
use Inc\Api\SettingsApi;

class AdminDashboard extends BaseController
{
    public $settings_api;
    public $mainmenu;
    public $submenu;

    public function __construct()
    {
        $this->settings_api = new SettingsApi();

        $this->mainmenu = [
            'page_title' => 'Add Employee',
            'menu_title' => 'Add Employee',
            'capability' => 'manage_options',
            'menu_slug' => 'add_employee',
            'callback' => function () {
                echo 'Test Add Employee';
            },
            'icon_url' => 'dashicons-plus',
            'position' => 110
        ];

        $this->submenu = [
            [
                'parent_slug' => 'add_employee',
                'page_title' => 'View Employee',
                'menu_title' => 'View Employees',
                'capability' => 'manage_options',
                'menu_slug' => 'view_employee',
                'callback' => function () {
                    echo 'Test Employee';
                }
            ]
        ];
    }

    // Register the admin pages and subpages
    public function register()
    {
        $this->settings_api->addPages([$this->mainmenu])->addSubPages([$this->submenu])->register();
    }
}