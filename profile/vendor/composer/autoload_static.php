<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe3245b0ab5471d3a0cdd771eb84f48e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Feed' => __DIR__ . '/..' . '/dg/rss-php/src/Feed.php',
        'FeedException' => __DIR__ . '/..' . '/dg/rss-php/src/Feed.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfe3245b0ab5471d3a0cdd771eb84f48e::$classMap;

        }, null, ClassLoader::class);
    }
}