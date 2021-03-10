<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe0febb60aad5b9bbc80a698a133c91c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe0febb60aad5b9bbc80a698a133c91c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe0febb60aad5b9bbc80a698a133c91c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
