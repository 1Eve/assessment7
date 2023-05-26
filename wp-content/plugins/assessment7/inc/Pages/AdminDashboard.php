<?php

/**
 * @package assessment7
 */

namespace Inc\Pages;

use Inc\Api\CallBacks\AdminCB;
use Inc\Base\BaseController;
use Inc\Api\SettingsApi;

class AdminDashboard extends BaseController
{
    public $settings_api;
    public $mainmenu;
    public $submenu;

    public $callbacks;

    public function __construct()
    { $this->callbacks = new AdminCB();
        $this->settings_api = new SettingsApi();

        $this->mainmenu = [
            'page_title' => 'Add Employee',
            'menu_title' => 'Add Employee',
            'capability' => 'manage_options',
            'menu_slug' => 'add_employee',
            'callback' => [$this->callbacks, "AddEmployee"],
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
                'callback' => [$this->callbacks, "ViewEmployee"]
            
            ]
        ];
    }

    // Register the admin pages and subpages
    public function register()
    {
        $this->settings_api->addPages([$this->mainmenu])->HasSubPage()->addSubPages($this->submenu)->register();
    }
}