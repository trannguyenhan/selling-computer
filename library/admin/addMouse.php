<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerMouseProducts.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';
    $productID=$_POST['productID'];

    $service=new ComputerMouseProductsServices();
    $all_m=$service->getAll();
    $service1=new PCServices();
    $all_pc=$service1->getAll();
    $service2=new LaptopServices();
    $all_lt=$service2->getAll();
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
    echo "Add success!";
?>
