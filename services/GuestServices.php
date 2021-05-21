<?php

require_once ROOT . DS . 'services' . DS . 'MySqlConnect.php';
require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Guest.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Bill.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . "Type.php";

class GuestServices extends MySqlConnect {
    /**
     * The method support insert data to database
     * @param Guest $guest
     */
    public function insert($guest) {
        // add to guest table
        // $query = "insert into guest(user_name, your_password, your_name)
        //             value (" .
        //             "'" . $guest->getUsername() . "' ," .
        //             "'" . $guest->getPassword() . "' ," .
        //             "'" . $guest->getName() . "'"
        //                 . ")";
        $username = $guest->getUsername();
        $password = $guest->getPassword();
        $name = $guest->getName();
        $address = $guest->getAddress();
        $telephone = $guest->getTelephone();

        $query = "insert into guest(user_name, your_password, your_name, address, telephone)
                  value('$username', '$password', '$name', '$address', '$telephone')
                  ";

        parent::addQuerry($query);
        parent::updateQuery();

        // when create guest, one cart will create
        $query = "insert into cart(user_name)
                    value (" .
                    "'" . $guest->getUsername() . "'"
                        . ")";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * The method support delete row in database
     * @param String $username
     */
    public function delete($username){
        // next, delete row with user_name in evaluate table
        $query = "delete from evaluate
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in cart_products table
        $cart_id = self::getCartID($username);
        $query = "delete from cart_products
                  where cart_id = " . $cart_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in cart table
        $query = "delete from cart
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in guest table
        $query = "delete from guest
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Return all product in products table
     * @return array
     */
    public function getAll(){
        $listGuest = array();
        $query = "select * from guest";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $password = $row["your_password"];
            $name = $row["your_name"];
            $address = $row["address"];
            $telephone = $row["telephone"];

            $guest = new Guest($username, $password, $name, $address, $telephone);

            array_push($listGuest, $guest);
        }

        return $listGuest;
    }

    /**
     * Return product have product_id = $product_id
     * @param String $username
     * @return Guest
     */
    public function get($username){
        $query = "select * from guest
                    where user_name='" . $username . "'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        if($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $password = $row["your_password"];
            $name = $row["your_name"];
            $address = $row["address"];
            $telephone = $row["telephone"];

            $guest = new Guest($username, $password, $name, $address, $telephone);
            return $guest;
        }

        return null;
    }

    /**
     * The method update data to database
     * @param Guest $guest
     */
    public function update($guest) {
        // update to products table
        // $query = "update guest
        //             set " .
        //             "your_password = " . "'" . $guest->getPassword() . "' ," .
        //             "your_name = " . "'" . $guest->getPassword() . "'" .
        //             "where user_name = '" . $guest->getUsername() . "'"
        //             . "";

        $username = $guest->getUsername();
        $password = $guest->getPassword();
        $name = $guest->getName();
        $address = $guest->getAddress();
        $telephone = $guest->getTelephone();

        $query = "update guest
                  set your_password = '$password',
                      your_name = '$name',
                      address = '$address',
                      telephone = '$telephone'
                  where user_name = '$username'
                  ";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Method get cart_id corresponding with username
     * @param String $username
     * @return int
     */
    public function getCartID($username){
        if(self::get($username) == null){
            return -1;
        }

        $query = "select cart_id from cart
	               where user_name = '" . $username . "'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        $row = mysqli_fetch_array($result);
        $cart_id = $row["cart_id"];

        return $cart_id;
    }

    /**
     * Method get all products of guest
     * @param String $username
     * @return array
     */
    public function getListCartProducts($username){
        $listCartProducts = array();

        $cart_id = self::getCartID($username);
        $query = "select * from cart_products
                    where cart_id =" . $cart_id;

        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];

            if(TypeProductsServices::checkType($product_id) == Type::LAPTOP){
                $service = new LaptopServices();
                $laptop = $service->get($product_id);
                array_push($listCartProducts, $laptop);
            } else if (TypeProductsServices::checkType($product_id) == Type::PC){
                $service = new PCServices();
                $pc = $service->get($product_id);
                array_push($listCartProducts, $pc);
            } else if(TypeProductsServices::checkType($product_id) == Type::MOUSE){
                $service = new ComputerMouseProductsServices();
                $mouse = $service->get($product_id);
                array_push($listCartProducts, $mouse);
            } else {
                echo "hello";
                array_push($listCartProducts, null);
            }

        }

        return $listCartProducts;
    }

    /**
     * Method get all products of guest
     * @param String $username
     * @param Products $product
     * @return array
     */
    public function insertProduct($username, $product, $quantity){
        $cart_id = self::getCartID($username);
        $product_id = $product->getProductID();
        $query = "insert into cart_products(cart_id, product_id, quantity)
                    value($cart_id, $product_id, $quantity)
                  ";
        
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Method help remove product from cart
     * @param int $product_id
     */
    public function removeProduct($product_id, $username){
        $cart_id = self::getCartID($username);
        $query = "delete from cart_products where product_id = $product_id and cart_id = $cart_id";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
    * Check account is exists
    * @param String $username
    * @param String $password
    * @return bool
    */
    public function checkAccount($username, $password){
        $query = "select * from guest where user_name = '$username' and your_password = '$password'";
        parent::addQuerry($query);

        $result = parent::executeQuery();
        if(mysqli_fetch_array($result)){
            return True;
        } else {
            return False;
        }
    }

    /**
    * Get all product in bill
    * @param String $username
    * @return array
    */
    public function getListProductsBill($username){
        $listProductsBill = array();

        $query = "select * from bill where user_name = '$username'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $bill_id = $row["bill_id"];
            $date_bill = $row["date_bill"];
            $total_money = $row["total_money"];
            $quantity = $row["quantity"];

            $bill = new Bill($product_id, $username, $date_bill, $total_money, $quantity);
            array_push($listProductsBill, $bill);
        }

        return $listProductsBill;
    }

    /**
    * Insert product to bill
    * @param Bil $bill
    */
    public function submitBill($bill){
        $product_id = $bill->getProductID();
        $username = $bill->getUsername();
        $date_bill = $bill->getDateBill();
        $total_money = $bill->getTotalMoney();
        $quantity = $bill->getQuantity();

        $query = "insert into bill(product_id, user_name, date_bill, total_money, quantity)
                  value($product_id, '$username', '$date_bill', $total_money, $quantity)
                  ";
        echo $query;
        parent::addQuerry($query);
        parent::updateQuery();
    }
}

// require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
// require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'PC.php';
//
// $service = new PCServices();
// $pc = $service->get(30001); echo $pc->getProductID();
// $service = new GuestServices();
// $service->insertProduct("huy0628", $pc, 5);
