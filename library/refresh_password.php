<?php
require_once 'lib_config.php';

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
