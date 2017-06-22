<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad6c243f93b2b13101818840e7325cda
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Memory\\' => 12,
        ),
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Memory\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-memory/src',
        ),
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendPdf\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendpdf/library',
            ),
        ),
        'P' => 
        array (
            'PHPQRCode' => 
            array (
                0 => __DIR__ . '/..' . '/aferrandini/phpqrcode/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad6c243f93b2b13101818840e7325cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad6c243f93b2b13101818840e7325cda::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitad6c243f93b2b13101818840e7325cda::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}