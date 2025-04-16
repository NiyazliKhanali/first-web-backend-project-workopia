<?php

require_once '../helpers.php';


$routes = [
    '/project-workopia/public/' => '/controllers/home.php',
    '/project-workopia/public/listings' => '/controllers/listings/index.php',
    '/project-workopia/public/listings/create' => '/controllers/listings/create.php',
    '/project-workopia/public/error/404' => '/controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)){
    require basePath($routes[$uri]);
} else{
    require basePath($routes['/project-workopia/public/error/404']);
}