<?php


class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstace(){
        if (self::$instance === null){
            self::$instance = new Application();
            echo 'Chào';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstace();
$app2 = Application::getInstace();