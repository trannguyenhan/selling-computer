<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'selling-computer');
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'RouteController.php';
$url = isset($_GET["url"]) ? $_GET["url"] : "/";

$route = new RouteController($url);
$route->show();

/**
 * Footer includes infomation about group, contact and other
 */
require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php';