<?php

use exframe\core\Router;

require '../vendor/exframe/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

define('DEBUG', 0);
define('ROOT', dirname(__DIR__));
define('CORE', dirname(__DIR__) . '/vendor/exframe/core');
define('LIBS', dirname(__DIR__) . '/vendor/exframe/libs');
define('WIDGETS', dirname(__DIR__) . '/vendor/exframe/widgets');
define('APP', dirname(__DIR__) . '/app');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT', 'new');

$query = rtrim($_SERVER['QUERY_STRING'], '/');

// Автозагрузчик классов
/*spl_autoload_register(function ($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});*/

new \exframe\core\App();

// defaults routes
Router::add('^admin$', ['controller' => 'catalog', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)/?(?P<params>[a-z-0-9]+)?$');

Router::dispatch($query);

