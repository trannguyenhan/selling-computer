<?php
require_once ROOT . DS . 'services' . DS . 'MySqlConnect.php';

class AdminServices extends MySqlConnect {
    public function valid($username, $password){
        $query = "select * from admin where admin_username = '$username' and admin_password = '$password'";

        parent::addQuerry($query);
        $result = parent::executeQuery();
        if(mysqli_fetch_array($result)){
            return True;
        } else {
            return False;
        }
    }

    public function create($username, $password){
        $query = "insert admin (admin_username, admin_password)
                  value('$username', '$password')";

        parent::addQuerry($query);
        parent::updateQuery();
    }
}
