<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a6eab6cdb62e0b393f1e4abb990d377
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a6eab6cdb62e0b393f1e4abb990d377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a6eab6cdb62e0b393f1e4abb990d377::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a6eab6cdb62e0b393f1e4abb990d377::$classMap;

        }, null, ClassLoader::class);
    }
}
