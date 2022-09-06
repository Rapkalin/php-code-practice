<?php

class Autoloader
{
    static function autoload ($class)
    {
        $class = str_replace(array('Challenge\\', '\\'), array('', '/'), $class);
        require $class . '.php';
    }

    static function register()
    {
        spl_autoload_register(array('Autoloader', 'autoload'));
    }

}