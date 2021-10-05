<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5916b5c1dbce0ee55c35a0db81b15cb
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'threewp_broadcast\\premium_pack\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'threewp_broadcast\\premium_pack\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5916b5c1dbce0ee55c35a0db81b15cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5916b5c1dbce0ee55c35a0db81b15cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}