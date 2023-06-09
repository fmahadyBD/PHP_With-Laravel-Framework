<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ddd93f8e5399918f3fe2295e8223b9a
{
    public static $files = array (
        '781355429bdb94f6f52d1cbb5ef46109' => __DIR__ . '/../..' . '/app/helpers/helper.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ddd93f8e5399918f3fe2295e8223b9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ddd93f8e5399918f3fe2295e8223b9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ddd93f8e5399918f3fe2295e8223b9a::$classMap;

        }, null, ClassLoader::class);
    }
}
