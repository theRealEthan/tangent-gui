<?php

$router = $di->getRouter();

// Define your routes here

$router->handle($_SERVER['REQUEST_URI']);


$route = $router->add('/api/recommended/{movieId}', [
    'controller' => 'api',
    'action' => 'recommended',
    'movieId' => 2
]);