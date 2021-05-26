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
    $model=$_GET['model'];
    $sup=$_GET['sup'];


    if($type=='1'){
        $services = new LaptopServices();
        $products= $services->getAll();
        foreach($products as $product){
            if(($product->getProductID()==$id || $id=="") && ($product->getModel()== $model || $model=="") && ($product->getSupplier()==$sup || $sup=="") && $product->getDisable()=='0'){
                echo '<div class="product">';
                echo ' <div>';
                echo '<img src="' . $product->getImage() . '" alt="" width="200px;" height="200px">';
                echo '<p style="margin-left: 5px;">' . $product->getModel() . '</p>';
                echo '<p style="margin-top: 0px; margin-right: 0px;">' . $product->getPrice() . 'Đ</p>';
                echo '</div>';
                echo '<div>';
                echo '<button class="btn-ql-xx" onclick="sc_ct_sp(this.value)" value="'. $product->getProductID() . '">Detail</button>';
                echo '<button class="btn-ql-xx" onclick="delete_by_id(this)" value="'. $product->getProductID() .'">Delete</button>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    if($type=='2'){
        $services = new PCServices();
        $products= $services->getAll();
        foreach($products as $product){
            if(($product->getProductID()==$id || $id=="") && ($product->getModel()== $model || $model=="") && ($product->getSupplier()==$sup || $sup=="") && $product->getDisable()=='0'){
                echo '<div class="product">';
                echo ' <div>';
                echo '<img src="' . $product->getImage() . '" alt="" width="200px;" height="200px">';
                echo '<p style="margin-left: 5px;">' . $product->getModel() . '</p>';
                echo '<p style="margin-top: 0px; margin-right: 0px;">' . $product->getPrice() . 'Đ</p>';
                echo '</div>';
                echo '<div>';
                echo '<button class="btn-ql-xx" onclick="sc_ct_sp(this.value)" value="'. $product->getProductID() . '">Detail</button>';
                echo '<button class="btn-ql-xx" onclick="delete_by_id(this)"  value="'. $product->getProductID() .'">Delete</button>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    if($type=='3'){
        $services = new ComputerMouseProductsServices();
        $products= $services->getAll();
        foreach($products as $product){
            if(($product->getProductID()==$id || $id=="") && ($product->getModel()== $model || $model=="") && ($product->getSupplier()==$sup || $sup=="") && $product->getDisable()=='0'){
                echo '<div class="product">';
                echo ' <div>';
                echo '<img src="' . $product->getImage() . '" alt="" width="200px;" height="200px">';
                echo '<p style="margin-left: 5px;">' . $product->getModel() . '</p>';
                echo '<p style="margin-top: 0px; margin-right: 0px;">' . $product->getPrice() . 'Đ</p>';
                echo '</div>';
                echo '<div>';
                echo '<button class="btn-ql-xx" onclick="sc_ct_sp(this.value)" value="'. $product->getProductID() . '">Detail</button>';
                echo '<button class="btn-ql-xx" onclick="delete_by_id(this)" value="'. $product->getProductID() .'">Delete</button>';
                echo '</div>';
                echo '</div>';


        }}
    }
?>
