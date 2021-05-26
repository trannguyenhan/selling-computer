<?php
require_once 'lib_config.php';

if(array_key_exists("bill_id", $_POST)){
    $bill_id = $_POST['bill_id'];

    require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
    $service = new GuestServices();

    $service->updateStatusBill($bill_id, 1);
}

header("Location: ../account-management");
