<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbfab15c18425b1aebf79f4eb9bcc08a1
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbfab15c18425b1aebf79f4eb9bcc08a1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbfab15c18425b1aebf79f4eb9bcc08a1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitbfab15c18425b1aebf79f4eb9bcc08a1::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}