<?php

require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ProductsServices.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerMouseProducts.php';

class ComputerMouseProductsServices extends ProductsServices {
    /**
     * The method support insert data to database
     * @param ComputerMouseProducts $mouse
     */
    public function insert($mouse) {
        // add to products table
        parent::insert($mouse);
        
        // add to computer_mouse_products table
        $query = "insert into computer_mouse_products(product_id, standard_connection, connection_protocol, is_led, size)
                    value (" .
                    $mouse->getProductID() . "," .
                    $mouse->getStandardConnection() . ", " .
                    "'" . $mouse->getConnectionProtocon() . "' ," .
                    $mouse->getIsLed() . " ," .
                    "'" . $mouse->getSize() . "' "
                        . ")";
        
        parent::addQuerry($query);
        parent::updateQuery();
    }
    
    /**
     * Return all product in products table
     * @return array
     */
    public function getAll(){
        $listMouse = array();
        $query = "select * from
                    products p inner join computer_mouse_products cmp on p.product_id = cmp.product_id";
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
            $standardConnection = $row["standard_connection"];
            $connectionProtocal = $row["connection_protocol"];
            $isLed = $row["is_led"];
            $size = $row["size"];
            $disable = $row["dis"];

            $mouse = new ComputerMouseProducts($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
                $supplier, $standardConnection, $connectionProtocal, $isLed, $size, $description);
            $mouse->setDisable($disable);

            array_push($listMouse, $mouse);
        }
        
        return $listMouse;
    }
    
    /**
     * Return product have product_id = $product_id
     * @param int $product_id
     * @return ComputerMouseProducts
     */
    public function get($product_id){
        $query = "select * from
                    products p inner join computer_mouse_products cmp on p.product_id = cmp.product_id 
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
            $standardConnection = $row["standard_connection"];
            $connectionProtocal = $row["connection_protocol"];
            $isLed = $row["is_led"];
            $size = $row["size"];
            $disable = $row["dis"];

            $mouse = new ComputerMouseProducts($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
                $supplier, $standardConnection, $connectionProtocal, $isLed, $size, $description);
            $mouse->setDisable($disable);

            return $mouse;
        }
        
        return null;
    }
    
    /**
     * The method update data to database
     * @param ComputerMouseProducts $mouse
     */
    public function update($mouse) {
        // update to products table
        parent::update($mouse);
        
        // update computer_mouse_products table
        $query = "update computer_mouse_products
                    set " .
                    "standard_connection = " . $mouse->getStandardConnection() . ", " . 
                    "connection_protocol = " . "'" . $mouse->getConnectionProtocon() . "' ," . 
                    "is_led = " . $mouse->getIsLed() . ", " .
                    "size = " . "'" . $mouse->getSize() . "'" .
                    "where product_id = " . $mouse->getProductID()
                    . "";
        
        parent::addQuerry($query);
        parent::updateQuery();
    }
}
