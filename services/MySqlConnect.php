<?php

require_once ROOT . DS . 'config' . DS . 'Db-Config.php';
require_once ROOT . DS . 'services' . DS . 'ISqlConnect.php';

class MySqlConnect implements ISqlConnect {
    private $db;
    private $query;
    
    public function __construct(){
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        
        // if($this->db){
        //     echo "connect successfully <br />";
        // } else {
        //     echo "connect fail! <br />";
        //     exit();
        // }
    }
    
    // add querry statement
    public function addQuerry($query){
        $this->query = $query;
    }

    // use with statement select 
    public function executeQuery(){
        $result = mysqli_query($this->db, $this->query);
        
        if(!$result){
            echo "FAIL when execute!";
            exit();
        }
        
        return $result;
    }
    
    
    // use with statement insert, delete, update,..
    public function updateQuery(){
        $result = mysqli_query($this->db, $this->query);
        
        if(!$result){
            echo "FAIL when update!";
            exit();
        }
        
        // no return result
    }

}


