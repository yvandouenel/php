<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7844e8282008bdf7f81a3102c66e877
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7844e8282008bdf7f81a3102c66e877::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7844e8282008bdf7f81a3102c66e877::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}