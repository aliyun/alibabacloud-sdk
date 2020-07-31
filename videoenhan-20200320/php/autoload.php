<?php

class Autoloader
{
    const BASE_NAMESPACE = 'AlibabaCloud\\SDK\\Videoenhan\\V20200320\\';

    const BASE_DIR = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

    public static function register()
    {
        spl_autoload_register(function ($class) {
            $name = str_replace(self::BASE_NAMESPACE, '', $class);
            $file = self::BASE_DIR . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
            if (file_exists($file)) {
                require_once $file;

                return true;
            }

            return false;
        });
    }
}

Autoloader::register();
