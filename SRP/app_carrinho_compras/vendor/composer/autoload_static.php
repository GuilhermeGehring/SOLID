<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf4dd221522a56a2a740977aef942083
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\CarrinhoCompra' => __DIR__ . '/../..' . '/src/CarrinhoCompra.php',
        'App\\EmailService' => __DIR__ . '/../..' . '/src/EmailService.php',
        'App\\Item' => __DIR__ . '/../..' . '/src/Item.php',
        'App\\Pedido' => __DIR__ . '/../..' . '/src/Pedido.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf4dd221522a56a2a740977aef942083::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf4dd221522a56a2a740977aef942083::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf4dd221522a56a2a740977aef942083::$classMap;

        }, null, ClassLoader::class);
    }
}
