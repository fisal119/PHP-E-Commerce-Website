<?php

class DBController{

    // databse connection propertise
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "shopee";

    // connection property
    public $con = null;

    // call constructor 
    public function __construct(){
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail ".$this->con->connect_error;
        }
    }


    // close connection by destruct
    public function __destruct(){
        $this->closeConnection();
    }

    // method for closing connection 
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }


}
















?>