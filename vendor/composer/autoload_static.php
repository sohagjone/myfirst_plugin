<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita93b10fc52d0526a378ca30f58ac096a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Softechlove\\Sohagjone\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Softechlove\\Sohagjone\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita93b10fc52d0526a378ca30f58ac096a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita93b10fc52d0526a378ca30f58ac096a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita93b10fc52d0526a378ca30f58ac096a::$classMap;

        }, null, ClassLoader::class);
    }
}