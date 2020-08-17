<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdda05b52bf3abfe385e9deb1808e159
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ArcherZdip\\ScoutElastic\\Tests\\' => 30,
            'ArcherZdip\\ScoutElastic\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ArcherZdip\\ScoutElastic\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'ArcherZdip\\ScoutElastic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdda05b52bf3abfe385e9deb1808e159::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdda05b52bf3abfe385e9deb1808e159::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
