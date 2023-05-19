<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6f18ee92068fff2be78ae57126ad9a2
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6f18ee92068fff2be78ae57126ad9a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6f18ee92068fff2be78ae57126ad9a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6f18ee92068fff2be78ae57126ad9a2::$classMap;

        }, null, ClassLoader::class);
    }
}