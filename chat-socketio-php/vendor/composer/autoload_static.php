<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ac98123ea49737a0ea13c26b03450ff
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ac98123ea49737a0ea13c26b03450ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ac98123ea49737a0ea13c26b03450ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
