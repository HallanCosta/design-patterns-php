<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite58efc08a2c50f0feb635a0a1f694b2a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\Interfaces\\' => 26,
            'DesignPatterns\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Interfaces',
        ),
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App/DesignPatterns',
        ),
    );

    public static $classMap = array (
        'DesignPatterns\\Interfaces\\DesignPatterns\\Observer\\ObserverContract' => __DIR__ . '/../..' . '/src/Interfaces/DesignPatterns/Observer/ObserverContract.php',
        'DesignPatterns\\Observer\\Observer' => __DIR__ . '/../..' . '/src/App/DesignPatterns/Observer/Observer.php',
        'DesignPatterns\\Observer\\Subject' => __DIR__ . '/../..' . '/src/App/DesignPatterns/Observer/Subject.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite58efc08a2c50f0feb635a0a1f694b2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite58efc08a2c50f0feb635a0a1f694b2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite58efc08a2c50f0feb635a0a1f694b2a::$classMap;

        }, null, ClassLoader::class);
    }
}
