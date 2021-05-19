<?php
    $path_project = 'selling-computer';

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);
    
    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'PC.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';
    $productID=$_POST['productID'];

    $service=new PCServices();
    $all_pc=$service->getAll();
    $b=true;
    foreach ($all_pc as $pc) {
       $id =  $pc->getProductID();
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
    $case=$_POST['case'];
    $screen=$_POST['screen'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $storage=$_POST['storage'];
    $card=$_POST['card'];
    $img=$_POST['img'];
    $depscription=$_POST['depscription'];
    
    $product=new PC($productID,$model, $img, $price, 
    $weight, $color, $numberOfProduct, $supplier, $cpu, $ram, $storage, $screen, 
    $card, $mainConnection, $os, $case, $depscription);
    
    $service->insert($product);
    echo "Thêm thành công!";
?>
