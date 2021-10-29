<?php

/**
 * Front Controller
 */

// Require the controller class
require "../App/Controllers/Posts.php";

/**
 * Routing
 */
require "../Core/Router.php";

$router = new Router();

// Add the routes
$router->add('', ["controller" => "Home", "action" => "index"]);
$router->add('posts', ["controller" => "Posts", "action" => "index"]);
$router->add("{controller}/{action}");
$router->add("admin/{action}/{controller}");
$router->add('{controller}/{id:\d+}/{action}');

/*
// Display the routing table
echo "<pre>";
print_r($router->getRoutes());
echo "</pre>";

$url = $_SERVER['QUERY_STRING'];

if($router->match($url)) {
    echo "<pre>";
    print_r($router->getParams());
    echo "</pre>";
}
else {
    echo 
    "No route found for the $url";
}
*/
$router->dispatch($_SERVER["QUERY_STRING"]);