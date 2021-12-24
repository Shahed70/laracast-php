<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Core\\App' => $baseDir . '/core/App.php',
    'App\\Core\\Request' => $baseDir . '/core/Request.php',
    'App\\Core\\Router' => $baseDir . '/core/Router.php',
    'App\\Models\\Project' => $baseDir . '/app/models/Project.php',
    'App\\controllers\\PageController' => $baseDir . '/app/controllers/PageController.php',
    'App\\controllers\\UserController' => $baseDir . '/app/controllers/UserController.php',
    'ComposerAutoloaderInit7d84e37ffe87ff1e6281cf9ab0b87394' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit7d84e37ffe87ff1e6281cf9ab0b87394' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Connection' => $baseDir . '/core/database/Connection.php',
    'QueryBuilder' => $baseDir . '/core/database/QueryBuilder.php',
);
