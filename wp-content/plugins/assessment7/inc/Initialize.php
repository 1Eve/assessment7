<?php

/**
*@package assessment7 
*/

namespace Inc;
Class Initialize{
    public static function get_services(){
        return [
            Pages\AdminDashboard::class,
            Pages\AddEmployeeDB::class,
            // Base\AssessmentStyles::class,
            Api\SettingsApi::class,
            Pages\AddEmployeeDB::class
        ];
    }

    public static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    private static function instantiate($class){
        $service = new $class;
        return $service;
    }
}