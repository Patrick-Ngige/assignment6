<?php
/**
 * @package AddMembersPlugin
 */

namespace Inc;

class Init{
    public static function get_services(){
        return [
            Pages\AdminPage::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
            Pages\RegisterBook::class
        ];
    }

    public static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service, 'AddMembers')){
                $service->AddMembers();
            }
        }
    }

    private static function instantiate($class){
        $service = new $class;
        return $service;
    }
}