<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitde77ae76bc818ef7811df1152bf7bd95
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

        spl_autoload_register(array('ComposerAutoloaderInitde77ae76bc818ef7811df1152bf7bd95', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitde77ae76bc818ef7811df1152bf7bd95', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitde77ae76bc818ef7811df1152bf7bd95::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
