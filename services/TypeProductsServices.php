<?php

require_once ROOT . DS . 'config' . DS . 'db_config.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';

class TypeProductsServices {
    /**
     * Method check type of product is LAPTOP, PC or MOUSE
     * @param int $product_id
     * @return int
     */
    public static function checkType($product_id){
        $service = new PCServices();
        $product = $service->get($product_id);

        if($product != null){
            return Type::PC;
        } else {
            $service = new LaptopServices();
            $product = $service->get($product_id);

            if($product != null){
                return Type::LAPTOP;
            } else {
                $service = new ComputerMouseProductsServices();
                $product = $service->get($product_id);

                if($product != null){
                    return Type::MOUSE;
                }
            }
        }

        return Type::NONE;
    }
}
