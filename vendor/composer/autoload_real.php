<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacce66fe66971b986be7db6e1e7a21bb
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

        spl_autoload_register(array('ComposerAutoloaderInitacce66fe66971b986be7db6e1e7a21bb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacce66fe66971b986be7db6e1e7a21bb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitacce66fe66971b986be7db6e1e7a21bb::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
