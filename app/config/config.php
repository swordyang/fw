<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'mysql' => array(
            'adapter'     => 'Mysql',
            'host'        => 'localhost',
            'username'    => 'root',
            'password'    => '',
            'dbname'      => 'www_fly3w_com',
            'charset'     => 'utf8',
        ),
        'mongo' => array(
            'adapter'     => 'Mysql',
            'host'        => 'localhost',
            'username'    => '',
            'password'    => '',
            'dbname'      => 'www_fly3w_com',
            'charset'     => 'utf8',
        )

    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => '/flyway/',
    )
));
