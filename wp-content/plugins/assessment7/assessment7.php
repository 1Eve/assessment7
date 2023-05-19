<?php

/**
*@package assessment7 
*/

/*
* Plugin Name: Custom Assessment7 plugin
* Plugin URI:https://............
* Description: A simple Assessment plugin
* Author: Patrick Mwaniki
* Author URI: https://............
* Version: 1.0.0
*/

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Initialize;

// security check
if(!defined('ABSPATH')){
    echo 'File not found';
    exit;
}

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
}

class assessment7 {
    //Activate my plugin
    function activatePlugin()
    {
        require_once plugin_dir_path(__FILE__). '/inc/Base/Activate.php';
        Activate::activatePlugin();
    }
    //Deactivate my plugin
    function DeactivatePlugin()
    {
        require_once plugin_dir_path(__FILE__). '/inc/Base/Deactivate.php';
        Deactivate::deactivatePlugin();
    }

}

if(class_exists('Inc\\Initialize')){
    Initialize::register_services(); 
}

if(class_exists('assessment7')){
    $Instance = new Assessment7();
}

$Instance->activatePlugin();
$Instance->DeactivatePlugin();