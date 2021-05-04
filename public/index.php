<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'php' . DS . 'selling-computer');
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'RouteController.php';

/**
 * Header includes tag head and nav bar
 */
require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'header.php';

$url = isset($_GET["url"]) ? $_GET["url"] : "/";
if(strcmp($url, "/") == 0){ // call home page if path is '/'
    require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'home.php';
} else { // routing path if see path other '/'
    $route = new RouteController($url);
    $route->show();
}

/**
 * Footer includes infomation about group, contact and other
 */
require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php';