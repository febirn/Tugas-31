<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31ed2a2387cead4803e75f82191a4569
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31ed2a2387cead4803e75f82191a4569::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31ed2a2387cead4803e75f82191a4569::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
