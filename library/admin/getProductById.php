<?php
    require_once '../lib_config.php';

    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerMouseProducts.php';
    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
    require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'PC.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'ComputerMouseProductsServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS .'PCServices.php';

    $type=$_GET['type'];
    $id=$_GET['id'];

    if($type=='1'){
        $service=new LaptopServices();
        $products = $service->getAll();
        foreach($products as $product){
            if($product->getProductID() != $id){
                continue;
            }
            echo $product->getProductID() . "&"
            . $product->getModel() . '&'
            . $product->getImage() . '&'
            .  $product->getPrice() . '&'
            . $product->getWeigh() . '&'
             . $product->getColor() . '&'
           .  $product->getNumberOfProducts() . '&'
            . $product->getSupplier() . '&'
           .  $product->getCpu() . '&'
            .  $product->getRam() . '&'
           . $product->getStorage() . '&'
           .  $product->getScreen() . '&'
            .  $product->getCard() . '&'
            . $product->getMainConnection() . '&'
             . $product->getOs() . '&'
            .  $product->getBattery() . '&'
             . $product->getDescription() . '&'
            . " "  . '&'
            . ' '  . '&'
            . ' '  . '&'
            . ' ' . '&'
           . ' ';

        }
    }elseif($type=='2'){
            $service=new PCServices();
            $products = $service->getAll();
            foreach($products as $product){
                if($product->getProductID() != $id){
                    continue;
                }
                echo $product->getProductID() . "&"
            . $product->getModel() . '&'
            . $product->getImage() . '&'
            .  $product->getPrice() . '&'
            . $product->getWeigh() . '&'
             . $product->getColor() . '&'
           .  $product->getNumberOfProducts() . '&'
            . $product->getSupplier() . '&'
           .  $product->getCpu() . '&'
            .  $product->getRam() . '&'
           . $product->getStorage() . '&'
           .  $product->getScreen() . '&'
            .  $product->getCard() . '&'
            . $product->getMainConnection() . '&'
             . $product->getOs() . '&'
            .  " " . '&'
             . $product->getDescription() . '&'
            .  $product->getCase()  . '&'
            . ' '  . '&'
            . ' '  . '&'
            . ' ' . '&'
           . ' ';


            }
    }elseif($type=='3'){
        $service=new ComputerMouseProductsServices();
        $products = $service->getAll();
        foreach($products as $product){
            if($product->getProductID() != $id){
                continue;
            }

            echo $product->getProductID() . "&"
            . $product->getModel() . '&'
            . $product->getImage() . '&'
            .  $product->getPrice() . '&'
            . $product->getWeigh() . '&'
             . $product->getColor() . '&'
           .  $product->getNumberOfProducts() . '&'
            . $product->getSupplier() . '&'
           .  " " . '&'
            .  " " . '&'
           . " " . '&'
           .  " " . '&'
            .  " " . '&'
            . " " . '&'
             . " " . '&'
            .  " " . '&'
             . $product->getDescription() . '&'
            .  " "  . '&'
            . $product->getStandardConnection() . '&'
            . $product->getConnectionProtocon() . '&'
            . $product->getIsLed() . '&'
           . $product->getSize();

        }
    }
/*

    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo "<product>";

    if($type=='1'){
        $service=new LaptopServices();
        $products = $service->getAll();
        foreach($products as $product){
            if($product->getProductID() != $id){
                continue;
            }
            echo '<productID id="id">' . $product->getProductID() . '</productID>';
            echo '<model id="model">' . $product->getModel() . '</model>';
            echo '<image>' . $product->getImage() . '</image>';
            echo '<price>' . $product->getPrice() . '</price>';
            echo '<weight>' . $product->getWeigh() . '</weigh>';
            echo '<color>' . $product->getColor() . '</color>';
            echo '<numberOfProducts>' . $product->getNumberOfProducts() . '</numberOfProducts>';
            echo '<supplier>' . $product->getSupplier() . '</supplier>';
            echo '<cpu>' . $product->getCpu() . '</cpu>';
            echo '<ram>' . $product->getRam() . '</ram>';
            echo '<storage>' . $product->getStorage() . '</storage>';
            echo '<screen>' . $product->getScreen() . '</screen>';
            echo '<card>' . $product->getCard() . '</card>';
            echo '<mainConnection>' . $product->getMainConnection() . '</mainConnection>';
            echo '<os>' . $product->getOs() . '</os>';
            echo '<battery>' . $product->getBattery() . '</battery>';
            echo '<description>' . $product->getDescription() . '</description>';
            echo '<case>'  . '</case>';
            echo '<standardConnection>'  . '</standardConnection>';
            echo '<connectionProtocal>'  . '</connectionProtocal>';
            echo '<led>' . '</led>';
            echo '<size>'  . '</size>';

        }
    }elseif($type=='2'){
            $service=new ComputerMouseProductsServices();
            $products = $service->getAll();
            foreach($products as $product){
                if($product->getProductID() != $id){
                    continue;
                }
                echo '<productID>' . $product->getProductID() . '</productID>';
                echo '<model>' . $product->getModel() . '</model>';
                echo '<image>' . $product->getImage() . '</image>';
                echo '<price>' . $product->getPrice() . '</price>';
                echo '<weight>' . $product->getWeigh() . '</weigh>';
                echo '<color>' . $product->getColor() . '</color>';
                echo '<numberOfProducts>' . $product->getNumberOfProducts() . '</numberOfProducts>';
                echo '<supplier>' . $product->getSupplier() . '</supplier>';
                echo '<cpu>' . $product->getCpu() . '</cpu>';
                echo '<ram>' . $product->getRam() . '</ram>';
                echo '<storage>' . $product->getStorage() . '</storage>';
                echo '<screen>' . $product->getScreen() . '</screen>';
                echo '<card>' . $product->getCard() . '</card>';
                echo '<mainConnection>' . $product->getMainConnection() . '</mainConnection>';
                echo '<os>' . $product->getOs() . '</os>';
                echo '<battery>' . '</battery>';
                echo '<description>' . $product->getDescription() . '</description>';
                echo '<case>' . $product->getCase() . '</case>';
                echo '<standardConnection>' . $product->getStandardConnection() . '</standardConnection>';
                echo '<connectionProtocal>' . $product->getConnectionProtocal() . '</connectionProtocal>';
                echo '<led>' . $product->getModel() . '</led>';
                echo '<size>' . $product->getModel() . '</size>';

            }
    }elseif($type=='3'){
        $service=new PCServices();
        $products = $service->getAll();
        foreach($products as $product){
            if($product->getProductID() != $id){
                continue;
            }
            echo '<productID>' . $product->getProductID() . '</productID>';
            echo '<model>' . $product->getModel() . '</model>';
            echo '<image>' . $product->getImage() . '</image>';
            echo '<price>' . $product->getPrice() . '</price>';
            echo '<weight>' . $product->getWeigh() . '</weigh>';
            echo '<color>' . $product->getColor() . '</color>';
            echo '<numberOfProducts>' . $product->getNumberOfProducts() . '</numberOfProducts>';
            echo '<supplier>' . $product->getSupplier() . '</supplier>';
            echo '<cpu>' . $product->getCpu() . '</cpu>';
            echo '<ram>' . $product->getRam() . '</ram>';
            echo '<storage>' . $product->getStorage() . '</storage>';
            echo '<screen>' . $product->getScreen() . '</screen>';
            echo '<card>' . $product->getCard() . '</card>';
            echo '<mainConnection>' . $product->getMainConnection() . '</mainConnection>';
            echo '<os>' . $product->getOs() . '</os>';
            echo '<battery>' . '</battery>';
            echo '<description>' . $product->getDescription() . '</description>';
            echo '<case>' . '</case>';
            echo '<standardConnection>' . $product->getStandardConnection() . '</standardConnection>';
            echo '<connectionProtocal>' . $product->getConnectionProtocal() . '</connectionProtocal>';
            echo '<led>' . $product->getIsLed() . '</led>';
            echo '<size>' . $product->getSize() . '</size>';
        }
    }
    echo "</product>";


*/
