<?php

spl_autoload_register('Autoload::loadFromDir');
spl_autoload_register('Autoload::loadCustom');

class Autoload
{
    public static function loadFromDir(string $name)
    {
        $path = str_replace('\\', '/', $name) . '.php';
//        var_dump($path);
        if (file_exists($path)) {
            require_once $path;
            return true;
        }
        return false;
    }

    public static function loadCustom(string $name)
    {
        $loadClass = [
            'Manager\User' => 'Manager.php',
        ];
        if (array_key_exists($name, $loadClass)) {
            var_dump($loadClass[$name]);
            require_once $loadClass[$name];
        }
    }
}