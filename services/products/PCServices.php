<?php

require_once 'ComputerProductsServices.php';
require_once '../../mvc/models/products/PC.php';

class PCServices extends  ComputerProductsServices {
    /**
     * The method support insert data to database 
     * @param PC $pc
     */
    public function insert($pc) {
        // add to products table and computer_products table
        parent::insert($pc);
        
        // add to pc table
        $query = "insert into pc(product_id, i_case)
                    value (" .
                    $pc->getProductID() . "," .
                    "'" . $pc->getCase() . "'"
                        . ")";
        parent::addQuerry($query);
        parent::updateQuery();
    }
    
    /**
     * Return all product in products table
     * @return array
     */
    public function getAll(){
        $listPC = array();
        $query = "select * from 
                    products p inner join computer_products cp on p.product_id = cp.product_id
                    inner join pc pc on p.product_id = pc.product_id";
        parent::addQuerry($query);
        $result = parent::executeQuery();
        
        while($row = mysqli_fetch_array($result)){
            $productID = $row["product_id"];
            $model = $row["model"];
            $image = $row["image"];
            $price = $row["price"];
            $weigh = $row["weigh"];
            $color = $row["color"];
            $numberOfProducts = $row["number_of_product"];
            $supplier = $row["supplier"];
            $description = $row["p_description"];
            $cpu = $row["s_cpu"];
            $ram = $row["s_ram"];
            $storage = $row["s_storage"];
            $screen = $row["screen"];
            $card = $row["s_card"];
            $mainConnection = $row["main_connection"];
            $os = $row["os"];
            $case = $row["i_case"];
            
            $pc = new PC($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
                $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $case, $description);
            
            array_push($listPC, $pc);
        }
        
        return $listPC;
    }
    
    /**
     * Return product have product_id = $product_id
     * @param int $product_id
     * @return PC
     */
    public function get($product_id){
        $query = "select * from 
                    products p inner join computer_products cp on p.product_id = cp.product_id
                    inner join pc pc on p.product_id = pc.product_id
                    where p.product_id=" . $product_id;
        parent::addQuerry($query);
        $result = parent::executeQuery();
        
        if($row = mysqli_fetch_array($result)){
            $productID = $row["product_id"];
            $model = $row["model"];
            $image = $row["image"];
            $price = $row["price"];
            $weigh = $row["weigh"];
            $color = $row["color"];
            $numberOfProducts = $row["number_of_product"];
            $supplier = $row["supplier"];
            $description = $row["p_description"];
            $cpu = $row["s_cpu"];
            $ram = $row["s_ram"];
            $storage = $row["s_storage"];
            $screen = $row["screen"];
            $card = $row["s_card"];
            $mainConnection = $row["main_connection"];
            $os = $row["os"];
            $case = $row["i_case"];
            
            $pc = new PC($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
                $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $case, $description);
            
            return $pc;
        }
        
        return null;
    }
    
    /**
     * The method update data to database
     * @param PC $pc
     */
    public function update($pc) {
        // update to products table and computer_products table
        parent::update($pc);
        
        // update pc table
        $query = "update pc
                    set " .
                    "i_case = " . "'" . $pc->getCase() . "' " .
                    "where product_id = " . $pc->getProductID()
                        . ""; 
        parent::addQuerry($query);
        parent::updateQuery();
        
        
    }
}

$pc = new PC(234, "MA123", "stc/1.jpg", 123.5, 1.5, "Red", 10, "Google", "Core-i3", "DDRAM3", 256, "FullHD1920x1920", "NDIVIA", "no", "Win7", "No-case", "No-description");
$services = new PCServices("localhost", "root", "mysql1234", "selling_computer", "3306");
$services->getAll();

