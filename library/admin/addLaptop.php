<?php
    $path_project = 'selling-computer';

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);
    
    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    $productID=$_POST['productID'];

    $service=new LaptopServices();
    $all_lt=$service->getAll();
    $b=true;
    foreach ($all_lt as $lt) {
       $id =  $lt->getProductID();
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
    $mainConnection=$_POST['mainConnection'];
    $os=$_POST['os'];
    $battery=$_POST['battery'];
    $screen=$_POST['screen'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $storage=$_POST['storage'];
    $card=$_POST['card'];
    $img='public/images/products/' . $_POST['img'];
    $depscription=$_POST['depscription'];
    // thieu anh
    $product=new Laptop($productID,$model, $img, $price, 
    $weight, $color, $numberOfProduct, $supplier, $cpu, $ram, $storage, $screen, 
    $card, $mainConnection, $os, $battery, $depscription);
    
    $service->insert($product);
    echo "Thêm thành công!";
?>
