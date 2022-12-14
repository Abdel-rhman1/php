<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26bcfb84eff4b11ffe5416938c5223c6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Structural\\' => 11,
            'SimpleFactory\\' => 14,
        ),
        'N' => 
        array (
            'NoFactoryClasses\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Structural\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Structural',
        ),
        'SimpleFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Creational/Factory/SimpleFactory/classes',
        ),
        'NoFactoryClasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Creational/Factory/NoFactory/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'AbstractFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Creational/Factory/AbstractFactory/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26bcfb84eff4b11ffe5416938c5223c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26bcfb84eff4b11ffe5416938c5223c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26bcfb84eff4b11ffe5416938c5223c6::$classMap;

        }, null, ClassLoader::class);
    }
}
