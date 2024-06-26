<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47d3d7a88d795f5987511c383aad88c8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47d3d7a88d795f5987511c383aad88c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47d3d7a88d795f5987511c383aad88c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47d3d7a88d795f5987511c383aad88c8::$classMap;

        }, null, ClassLoader::class);
    }
}
