<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit923541b37213a8fc54291ac582bfa082
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit923541b37213a8fc54291ac582bfa082::$classMap;

        }, null, ClassLoader::class);
    }
}
