<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'PC.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';
    $productID=$_POST['productID'];

    $service=new PCServices();
    $all_pc=$service->getAll();
    $service1=new LaptopServices();
    $all_lt=$service1->getAll();
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
        echo "ProductID duplicate!";
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
    $case=$_POST['case'];
    $screen=$_POST['screen'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $storage=$_POST['storage'];
    $card=$_POST['card'];
    $img='public/images/products/' . $_POST['img'];
    $depscription=$_POST['depscription'];

    $product=new PC($productID,$model, $img, $price,
    $weight, $color, $numberOfProduct, $supplier, $cpu, $ram, $storage, $screen,
    $card, $mainConnection, $os, $case, $depscription);

    $service->insert($product);
    echo "Add success!";
?>
