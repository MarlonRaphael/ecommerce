<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita53efb265fb773a830efa9881ed1d2ec
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInita53efb265fb773a830efa9881ed1d2ec::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita53efb265fb773a830efa9881ed1d2ec::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
