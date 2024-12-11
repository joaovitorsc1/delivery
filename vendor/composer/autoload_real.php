<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita4b7d7d9dda0ad048a42b2f1cf89b2cd
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

        spl_autoload_register(array('ComposerAutoloaderInita4b7d7d9dda0ad048a42b2f1cf89b2cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita4b7d7d9dda0ad048a42b2f1cf89b2cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita4b7d7d9dda0ad048a42b2f1cf89b2cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
