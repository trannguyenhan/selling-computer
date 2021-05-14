<?php

require_once ROOT . DS . 'services' . DS . 'MySqlConnect.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';

class ProductsServices extends  MySqlConnect {
    /**
     * The method support insert data to database
     * @param Products $product
     */
    public function insert($product) {
        // add to products table
        $query = "insert into products(product_id, model, image, price, weigh, color, number_of_product, supplier, p_description)
                    value (" .
                    $product->getProductID() . "," .
                    "'" . $product->getModel() . "' ," .
                    "'" . $product->getImage() . "' ," .
                    $product->getPrice() . "," .
                    $product->getWeigh() . "," .
                    "'" . $product->getColor() . "' ," .
                    $product->getNumberOfProducts() . "," .
                    "'" . $product->getSupplier() . "' ," .
                    "'" . $product->getDescription() . "'"
                        . ")";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * The method support delete row in database
     * @param int $product_id
     */
    public function delete($product_id){
        // first, delete row with product_id in pc table
        $query = "delete from pc
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in evalute table
        $query = "delete from evaluate
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in computer_mouse_products table
        $query = "delete from computer_mouse_products
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in laptop table
        $query = "delete from laptop
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in cart_products table
        $query = "delete from cart_products
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in computer_products table
        $query = "delete from computer_products
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with product_id in products table
        $query = "delete from products
                  where product_id = " . $product_id;
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * The method update data to database
     * @param Products $product
     */
    public function update($product) {
        // update to products table
        $query = "update products
                    set " .
                    "model = " . "'" . $product->getModel() . "' ," .
                    "image = " . "'" . $product->getImage() . "' ," .
                    "price = " . $product->getPrice() . "," .
                    "weigh = " . $product->getWeigh() . "," .
                    "color = " . "'" . $product->getColor() . "' ," .
                    "number_of_product = " . $product->getNumberOfProducts() . "," .
                    "supplier = " . "'" . $product->getSupplier() . "' ," .
                    "p_description = " . "'" . $product->getDescription() . "'" .
                    "where product_id = " . $product->getProductID()
                    . "";
        parent::addQuerry($query);
        parent::updateQuery();
    }

}

// $products = new ProductsServices().getAll();
// for($products as $product){
//   echo $products;
// }
