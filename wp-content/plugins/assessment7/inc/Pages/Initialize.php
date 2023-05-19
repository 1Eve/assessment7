<?php

/**
*@package assessment7 
*/

namespace Inc;
Class Initialize{
    public static function get_services(){
        return [
            Pages\AddMainMenu::class,
            Pages\AddTicket::class,
            Base\Loadstyles::class
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