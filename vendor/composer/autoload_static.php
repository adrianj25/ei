<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f90f1a48eee262084eca15f4b28bd02
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hamst\\ei1_prw_valeria_adrian_7c_2024\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hamst\\ei1_prw_valeria_adrian_7c_2024\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f90f1a48eee262084eca15f4b28bd02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f90f1a48eee262084eca15f4b28bd02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f90f1a48eee262084eca15f4b28bd02::$classMap;

        }, null, ClassLoader::class);
    }
}