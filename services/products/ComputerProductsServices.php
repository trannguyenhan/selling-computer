<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ProductsServices.php';

class ComputerProductsServices extends ProductsServices {
    /**
     * The method support insert data to database
     * @param ComputerProducts $computerProducts
     */
    public function insert($computerProducts) {
        // add to products table
        parent::insert($computerProducts);
                        
        // add to computer_products table
        $query = "insert into computer_products(product_id, s_cpu, s_ram, s_storage, screen, s_card, main_connection, os)
                    value (" .
                    $computerProducts->getProductID() . "," .
                    "'" . $computerProducts->getCpu() . "' ," .
                    "'" . $computerProducts->getRam() . "' ," .
                    $computerProducts->getStorage() . "," .
                    "'" . $computerProducts->getScreen() . "' ," .
                    "'" . $computerProducts->getCard() . "' ," .
                    "'" . $computerProducts->getMainConnection() . "' ," .
                    "'" . $computerProducts->getOs() . "'"
                        . ")";
        parent::addQuerry($query);
        parent::updateQuery();
    }
    
    /**
     * The method update data to database
     * @param ComputerProducts $computerProducts
     */
    public function update($computerProducts) {
        // update to products table
        parent::update($computerProducts);
        
        // update to computer_products table
        $query = "update computer_products
                    set " .
                    "s_cpu = " . "'" . $computerProducts->getCpu() . "' ," .
                    "s_ram = " . "'" . $computerProducts->getRam() . "' ," .
                    "s_storage = " . $computerProducts->getStorage() . "," .
                    "screen = " . "'" . $computerProducts->getScreen() . "' ," .
                    "s_card = " . "'" . $computerProducts->getCard() . "' ," .
                    "main_connection = " . "'" . $computerProducts->getMainConnection() . "' ," .
                    "os = " . "'" . $computerProducts->getOs() . "'" .
                    "where product_id = " . $computerProducts->getProductID()
                    . "";

        parent::addQuerry($query);
        parent::updateQuery();             
    }
}



