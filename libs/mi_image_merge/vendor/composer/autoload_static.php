<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17970c211610e5e1e8b2ae1b4d735706
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Treinetic\\ImageArtist\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Treinetic\\ImageArtist\\' => 
        array (
            0 => __DIR__ . '/..' . '/treinetic/imageartist/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17970c211610e5e1e8b2ae1b4d735706::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17970c211610e5e1e8b2ae1b4d735706::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}