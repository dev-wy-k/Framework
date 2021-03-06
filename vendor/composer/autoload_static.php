<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfab15c18425b1aebf79f4eb9bcc08a1
{
    public static $classMap = array (
        'ComposerAutoloaderInitbfab15c18425b1aebf79f4eb9bcc08a1' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitbfab15c18425b1aebf79f4eb9bcc08a1' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'controller\\PageController' => __DIR__ . '/../..' . '/controllers/PageController.php',
        'controller\\TaskController' => __DIR__ . '/../..' . '/controllers/TaskController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbfab15c18425b1aebf79f4eb9bcc08a1::$classMap;

        }, null, ClassLoader::class);
    }
}
