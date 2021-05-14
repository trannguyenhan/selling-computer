<?php
require ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';

class ProductController implements Controller {
	public function __render(){
        require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'product.php';
    }

    public function view($product_id) {
        require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
        require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
        require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
        require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'PC.php';
        require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'ComputerMouseProducts.php';
        
        $check = TypeProductsServices::checkType($product_id);
        
        if($check == Type::PC) {
            $product = new PC();
            $service = new PCServices();
            $product = $service->get($product_id);
            require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'product.php';
        }
        elseif($check == Type::Laptop) {
            $product = new Laptop();
            $service = new LaptopServices();
            $product = $service->get($product_id);
            require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'product.php';
        }
        else {
            $product = new ComputerMouseProducts();
            $service = new ComputerMouseProductsServices();
            $product = $service->get($product_id);
            require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'product.php';
        }
        
    }
}