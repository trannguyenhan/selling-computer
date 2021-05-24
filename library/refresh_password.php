<?php
$path_project = 'selling-computer';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

// check session
ob_start();
session_start();

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
$service = new GuestServices();
$username = $_SESSION['username'];

$person = $service->get($username);
$new_person = new Guest($person->getUsername(), $new_password, $person->getName(), $person->getAddress(), $person->getTelephone());
$service->update($new_person);
header("Location: ../login");
