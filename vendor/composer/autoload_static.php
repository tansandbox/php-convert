<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08ba5a90e86090603deb2fc0275b3474
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Convert' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit08ba5a90e86090603deb2fc0275b3474::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}