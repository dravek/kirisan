<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit087de073239c7f6220fd081735209a27
{
    public static $classMap = array (
        'App\\Controllers\\MainController' => __DIR__ . '/../..' . '/app/controllers/MainController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit087de073239c7f6220fd081735209a27' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit087de073239c7f6220fd081735209a27' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit087de073239c7f6220fd081735209a27::$classMap;

        }, null, ClassLoader::class);
    }
}
