<?php

require_once "ISqlConnect.php";

class MySqlConnect implements ISqlConnect {
    private $db;
    private $query;
    
    public function __construct($host, $username, $password, $dbname, $port){
        $this->db = mysqli_connect($host, $username, $password, $dbname, $port);
        
        if($this->db){
            echo "connect successfully <br />";
        } else {
            echo "connect fail! <br />";
            exit();
        }
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


