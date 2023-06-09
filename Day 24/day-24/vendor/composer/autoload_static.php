<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita60e92a60df50708266673e42d125721
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita60e92a60df50708266673e42d125721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita60e92a60df50708266673e42d125721::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita60e92a60df50708266673e42d125721::$classMap;

        }, null, ClassLoader::class);
    }
}
