<?php

use Aura\SqlQuery\QueryFactory;
use DI\ContainerBuilder;
use FastRoute\RouteCollector;
use League\Plates\Engine;

$containerBuilder = new ContainerBuilder;

$containerBuilder->addDefinitions([
    Engine::class    =>  function() {
        return new Engine('../app/views');
    },
    QueryFactory::class => function() {
        return new QueryFactory('mysql');
    },
    PDO::class => function() {
        return new PDO("mysql:host=localhost;dbname=magazin_db","root","");
    }
]);

$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->get('/', ['App\Controllers\HomeController', 'index']);
    $r->get('/parcategory/{id:\d+}', ['App\Controllers\HomeController', 'parent_category']);
    $r->get('/undercategory/{id:\d+}', ['App\Controllers\HomeController', 'under_category']);
    $r->get('/brand/{id:\d+}', ['App\Controllers\HomeController', 'brand']);
    $r->get('/show/{id:\d+}', ['App\Controllers\HomeController', 'show']);

   $r->addGroup('/admin', function (RouteCollector $r) {
       $r->get('', ['App\Controllers\Admin\HomeController', 'index']);
       $r->get('/parcategory/{id:\d+}', ['App\Controllers\Admin\HomeController', 'parent_category']);
       $r->get('/undercategory/{id:\d+}', ['App\Controllers\Admin\HomeController', 'under_category']);
       $r->get('/brand/{id:\d+}', ['App\Controllers\Admin\HomeController', 'brand']);
       $r->get('/create', ['App\Controllers\Admin\HomeController', 'create']);
       $r->post('/store', ['App\Controllers\Admin\HomeController', 'store']);
       $r->get('/edit/{id:\d+}', ['App\Controllers\Admin\HomeController', 'edit']);
       $r->post('/edit/{id:\d+}/update', ['App\Controllers\Admin\HomeController', 'update']);
       $r->get('/delete/{id:\d+}', ['App\Controllers\Admin\HomeController', 'delete']);


       $r->get('/categories', ['App\Controllers\Admin\CategoriesController', 'index']);
       $r->get('/categories/create/{name}', ['App\Controllers\Admin\CategoriesController', 'create']);
       $r->get('/categories/brand/{name}', ['App\Controllers\Admin\CategoriesController', 'createbrand']);
       $r->post('/categories/storebrand', ['App\Controllers\Admin\CategoriesController', 'storebrand']);
       $r->post('/categories/store', ['App\Controllers\Admin\CategoriesController', 'store']);
       $r->get('/categories/{id:\d+}/edit/{name}', ['App\Controllers\Admin\CategoriesController', 'edit']);
       $r->post('/categories/{id:\d+}/update', ['App\Controllers\Admin\CategoriesController', 'update']);
       $r->get('/categories/{id:\d+}/delete/{name}', ['App\Controllers\Admin\CategoriesController', 'delete']);
       $r->post('/categories/delete', ['App\Controllers\Admin\CategoriesController', 'deletebrand']);

});
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ...
        var_dump("404 Not Found");
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ...
        var_dump("405 Method Not Allowed");
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $container->call($handler, $vars);
        // ... call $handler with $vars
        break;
}