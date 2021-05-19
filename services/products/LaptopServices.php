<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerProductsServices.php';

class LaptopServices extends ComputerProductsServices {
    /**
     * The method support insert data to database
     * @param Laptop $laptop
     */
    public function insert($laptop) {
        // add to products table and computer_products table
        parent::insert($laptop);

        // add to pc table
        $query = "insert into laptop(product_id, battery)
                    value (" .
                    $laptop->getProductID() . "," .
                    $laptop->getBattery()
                        . ")";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Return all product in products table
     * @return array
     */
    public function getAll(){
        $listLaptop = array();
        $query = "select * from
                    products p inner join computer_products cp on p.product_id = cp.product_id
                    inner join laptop l on p.product_id = l.product_id";
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
            $battery = $row["battery"];
            $disable = $row["dis"];

            $laptop = new Laptop($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
                $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $battery, $description);
            $laptop->setDisable($disable);

            array_push($listLaptop, $laptop);
        }

        return $listLaptop;
    }

    /**
     * Return product have product_id = $product_id
     * @param int $product_id
     * @return Laptop
     */
    public function get($product_id){
        $query = "select * from
                    products p inner join computer_products cp on p.product_id = cp.product_id
                    inner join laptop l on p.product_id = l.product_id
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
            $battery = $row["battery"];
            $disable = $row["dis"];

            $laptop = new Laptop($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
                $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $battery, $description);
            $laptop->setDisable($disable);

            return $laptop;
        }

        return null;
    }

    /**
     * The method update data to database
     * @param Laptop $laptop
     */
    public function update($laptop) {
        // update to products table and computer_products table
        parent::update($laptop);

        // update pc table
        $query = "update laptop
                    set " .
                    "battery = " . $laptop->getBattery() . " " .
                    "where product_id = " . $laptop->getProductID()
                    . "";

        parent::addQuerry($query);
        parent::updateQuery();
    }
}
