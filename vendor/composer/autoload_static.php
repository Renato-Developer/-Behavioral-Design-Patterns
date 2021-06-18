<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd77dc00df05430639bdc6b8cebd1e8f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd77dc00df05430639bdc6b8cebd1e8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd77dc00df05430639bdc6b8cebd1e8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd77dc00df05430639bdc6b8cebd1e8f::$classMap;

        }, null, ClassLoader::class);
    }
}
