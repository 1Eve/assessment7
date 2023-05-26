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

function activatePlugin()
{
    Inc\Base\Activate::activatePlugin();
}
//Deactivate my plugin
function DeactivatePlugin()
{
    Inc\Base\Deactivate::deactivatePlugin();
}
register_activation_hook(__FILE__, 'activatePlugin');
register_deactivation_hook(__FILE__, 'DeactivatePlugin');



if(class_exists('Inc\\Initialize')){
    Inc\Initialize::register_services(); 
}
