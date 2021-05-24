<?php
$path_project = 'selling-computer';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

// check session
ob_start();
session_start();

require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Bill.php';

$service = new GuestServices();
$listProducts = $service->getListCartProducts($_SESSION['username']);
$text = $_POST['list_quantity'];
$list_text = explode(" ", $text);

$list_quantity = array();
foreach ($list_text as $text) {
    array_push($list_quantity, intval($text));
}

$lens = count($listProducts);
for($i=0; $i<$lens; $i++){
    $product = $listProducts[$i];
    $quantity = $list_quantity[$i];
    $total_money = $product->getPrice() * $quantity;
    $bill = new Bill($product->getProductID(), $_SESSION['username'], date_create()->format('Y-m-d h:i:s'), $total_money, $quantity);

    $service->submitBill($bill);
    $service->removeProduct($product->getProductID(), $_SESSION['username']);
}
header("Location: ../cart");
