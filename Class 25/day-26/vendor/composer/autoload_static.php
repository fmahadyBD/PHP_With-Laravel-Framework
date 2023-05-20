<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefcbd372d68859196291a28b5242c0e5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitefcbd372d68859196291a28b5242c0e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefcbd372d68859196291a28b5242c0e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefcbd372d68859196291a28b5242c0e5::$classMap;

        }, null, ClassLoader::class);
    }
}