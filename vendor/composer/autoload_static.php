<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita387b8fa8fa396e01faf0faf02fe1395
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zaenal\\PhpDasar\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zaenal\\PhpDasar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita387b8fa8fa396e01faf0faf02fe1395::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita387b8fa8fa396e01faf0faf02fe1395::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita387b8fa8fa396e01faf0faf02fe1395::$classMap;

        }, null, ClassLoader::class);
    }
}
