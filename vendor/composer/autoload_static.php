<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8308bd1f93643e4afec293f199fb89ce
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8308bd1f93643e4afec293f199fb89ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8308bd1f93643e4afec293f199fb89ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
