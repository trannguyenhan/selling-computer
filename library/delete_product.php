<?php
require_once 'lib_config.php';

// check session
ob_start();
session_start();

$product_id = $_POST['product_id'];
$username = $_SESSION['username'];

require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
$service = new GuestServices();
$service->removeProduct($product_id, $username);
// echo "<script>alert("Thêm thành công!")</script>"
header("Location: ../cart");
