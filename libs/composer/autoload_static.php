<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb09e9b366f33a2ab86e93eaa2380dcb5
{
    public static $prefixLengthsPsr4 = array (
        'P' =>
        array (
            'PuleenoCMS\\QuillEditor\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PuleenoCMS\\QuillEditor\\' =>
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb09e9b366f33a2ab86e93eaa2380dcb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb09e9b366f33a2ab86e93eaa2380dcb5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb09e9b366f33a2ab86e93eaa2380dcb5::$classMap;
        }, null, ClassLoader::class);
    }
}