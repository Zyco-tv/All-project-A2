<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2ff0d3285b1a0b71e630e8a5d85b299
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2ff0d3285b1a0b71e630e8a5d85b299::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2ff0d3285b1a0b71e630e8a5d85b299::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
