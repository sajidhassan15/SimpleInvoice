<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34449f3ab9b0deb209c836732dd8523b
{
    public static $classMap = array (
        'App\\Controllers\\CustomersController' => __DIR__ . '/../..' . '/App/controllers/CustomersController.php',
        'App\\Controllers\\InvoicesController' => __DIR__ . '/../..' . '/App/controllers/InvoicesController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/App/controllers/ProductsController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/App/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/App/models/Project.php',
        'ComposerAutoloaderInit34449f3ab9b0deb209c836732dd8523b' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit34449f3ab9b0deb209c836732dd8523b' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit34449f3ab9b0deb209c836732dd8523b::$classMap;

        }, null, ClassLoader::class);
    }
}
