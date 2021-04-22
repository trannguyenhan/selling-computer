<?php

require_once 'MySqlConnect.php';
require_once '../mvc/models/Guest.php';

class GuestServices extends MySqlConnect {
    /**
     * The method support insert data to database
     * @param Guest $guest 
     */
    public function insert($guest) {
        // add to guest table
        $query = "insert into guest(user_name, your_password, your_name)
                    value (" .
                    "'" . $guest->getUsername() . "' ," .
                    "'" . $guest->getPassword() . "' ," .
                    "'" . $guest->getName() . "'"
                        . ")";
         
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
            
            $guest = new Guest($username, $password, $name);
            
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
        } else {
            return null;
        }
        
        $guest = new Guest($username, $password, $name);
        
        return $guest;
    }
    
    /**
     * The method update data to database
     * @param Guest $guest
     */
    public function update($guest) {
        // update to products table
        $query = "update guest
                    set " .
                    "your_password = " . "'" . $guest->getPassword() . "' ," .
                    "your_name = " . "'" . $guest->getPassword() . "'" .
                    "where user_name = '" . $guest->getUsername() . "'"
                    . "";
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
        $query = "delete from cart_products
                  where cart_id = " . $cart_id;
        parent::addQuerry($query);
        parent::updateQuery();
    }
    
    /**
     * Method get all products of guest
     * @param String $username
     */
    public function getListCartProducts($username){
        
    }
}

