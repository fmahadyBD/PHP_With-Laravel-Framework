<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84bc1f3b38dfc071482eeb4eaefbc9ba
{
    public static $files = array (
        'db41950d098c1a168e45c1394d848e0a' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84bc1f3b38dfc071482eeb4eaefbc9ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84bc1f3b38dfc071482eeb4eaefbc9ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84bc1f3b38dfc071482eeb4eaefbc9ba::$classMap;

        }, null, ClassLoader::class);
    }
}
