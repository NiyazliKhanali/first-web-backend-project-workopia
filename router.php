<?php

require_once basePath('routes.php');

if (array_key_exists($uri, $routes)){
    require basePath($routes[$uri]);
} else{
    require basePath($routes['/project-workopia/public/error/404']);
}