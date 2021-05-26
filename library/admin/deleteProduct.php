<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ProductsServices.php';

    $id=$_GET['id'];
    $service = new ProductsServices();
    $service->disable($id);
    echo "Delete success!";
?>
