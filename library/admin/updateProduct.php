<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';


    $type=$_POST['type'];
    $productID=$_POST['id'];
    $model=$_POST['model'];
    $price=$_POST['price'];
    $weight=$_POST['w'];
    $color=$_POST['color'];
    $numberOfProduct=$_POST['num'];
    $supplier=$_POST['supplier'];
    $mainConnection=$_POST['mc'];
    $os=$_POST['os'];
    $battery=$_POST['bat'];
    $screen=$_POST['screen'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $storage=$_POST['storage'];
    $card=$_POST['card'];
    $img=$_POST['img'];
    $depscription=$_POST['dep'];
    $case=$_POST['case'];
    $standardConnection=$_POST['sc'];
    $connectionProtocal=$_POST['cp'];
    $isLed=$_POST['led'];
    $size=$_POST['size'];
    // thieu anh

    if($type=='1'){
        $service= new LaptopServices();
        $product=new Laptop($productID,$model, $img, $price,
        $weight, $color, $numberOfProduct, $supplier, $cpu, $ram, $storage, $screen,
        $card, $mainConnection, $os, $battery, $depscription);

        $service->update($product);
        echo "Update success!";
    }
    else if($type=='2'){
        $service=new PCServices();
        $product=new PC($productID,$model, $img, $price,
        $weight, $color, $numberOfProduct, $supplier, $cpu, $ram, $storage, $screen,
        $card, $mainConnection, $os, $case, $depscription);

        $service->update($product);
        echo "Update success!";

    }
    elseif($type=='3'){
        $service=new ComputerMouseProductsServices();
        $product=new ComputerMouseProducts($productID,$model, $img, $price,
        $weight, $color, $numberOfProduct, $supplier, $standardConnection, $connectionProtocal, $isLed,
        $size, $depscription);

        $service->update($product);
        echo "Update success!";
    }

?>
