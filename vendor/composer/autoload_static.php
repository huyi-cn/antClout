<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf36cd6cf3256fde1800da74fc806d858
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AntCloudSDKCore\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AntCloudSDKCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/AntCloudSDKCore',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf36cd6cf3256fde1800da74fc806d858::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf36cd6cf3256fde1800da74fc806d858::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf36cd6cf3256fde1800da74fc806d858::$classMap;

        }, null, ClassLoader::class);
    }
}