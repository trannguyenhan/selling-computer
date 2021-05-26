<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';
    $productID=$_POST['productID'];

    $service=new LaptopServices();
    $all_lt=$service->getAll();
    $service1=new PCServices();
    $all_pc=$service1->getAll();
    $service2=new ComputerMouseProductsServices();
    $all_m=$service2->getAll();
    $b=true;
    foreach ($all_lt as $lt) {
       $id =  $lt->getProductID();
       if($id==$productID){
           $b=false;
           break;
       }
    }
    foreach ($all_pc as $lt) {
        $id =  $lt->getProductID();
        if($id==$productID){
            $b=false;
            break;
        }
     }
     foreach ($all_m as $lt) {
        $id =  $lt->getProductID();
        if($id==$productID){
            $b=false;
            break;
        }
     }

    if($b==false){
        echo "ProductID Duplicate!";
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
    echo "Add success!";
?>
