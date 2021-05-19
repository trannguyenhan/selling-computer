<?php
    $path_project = 'selling-computer';

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ProductsServices.php';

    $id=$_GET['id'];
    $service = new ProductsServices();
    $service->disable($id);
    echo "Xóa thành công!";                                                
?>
    