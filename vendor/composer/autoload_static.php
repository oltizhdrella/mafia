<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6ef9819c2f4ab682c4cf93e644c7393
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
            'Smeghead\\PhpClassDiagram\\' => 25,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
            'PHPStan\\PhpDocParser\\' => 21,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/tools',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Smeghead\\PhpClassDiagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/smeghead/php-class-diagram/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'PHPStan\\PhpDocParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpdoc-parser/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src/classes',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6ef9819c2f4ab682c4cf93e644c7393::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6ef9819c2f4ab682c4cf93e644c7393::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite6ef9819c2f4ab682c4cf93e644c7393::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInite6ef9819c2f4ab682c4cf93e644c7393::$classMap;

        }, null, ClassLoader::class);
    }
}
