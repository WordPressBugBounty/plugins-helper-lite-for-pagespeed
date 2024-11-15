<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36d2d5468d0845f00f10b6c1f8ec08af
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit36d2d5468d0845f00f10b6c1f8ec08af', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36d2d5468d0845f00f10b6c1f8ec08af', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36d2d5468d0845f00f10b6c1f8ec08af::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
