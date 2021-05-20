<?php
    $path_project = 'selling-computer';

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerMouseProducts.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';
    $productID=$_POST['productID'];

    $service=new ComputerMouseProductsServices();
    $all_m=$service->getAll();
    $b=true;
    foreach ($all_m as $m) {
       $id =  $m->getProductID();
       if($id==$productID){
           $b=false;
           break;
       }
    }

    if($b==false){
        echo "Trùng ProductID";
        return;
    }

    $model=$_POST['model'];
    $price=$_POST['price'];
    $weight=$_POST['weight'];
    $color=$_POST['color'];
    $numberOfProduct=$_POST['numberOfProduct'];
    $supplier=$_POST['supplier'];
    $standardConnection=$_POST['standardConnection'];
    $connectionProtocal=$_POST['connectionProtocal'];
    $isLed=$_POST['isLed'];
    $size=$_POST['size'];
    $img='public/images/products/' . $_POST['img'];
    $depscription=$_POST['depscription'];
    
    $product=new ComputerMouseProducts($productID,$model, $img, $price, 
    $weight, $color, $numberOfProduct, $supplier, $standardConnection, $connectionProtocal, $isLed,
    $size, $depscription);
    
    $service->insert($product);
    echo "Thêm thành công!";
?>
