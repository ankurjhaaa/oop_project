<?php
    class db {
        public $conn;
        public $localhost = "localhost";
        public $username = "username";
        public $password = "";
        public $database = "oop_first";

        public function __construct(){
            $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->database);
        }
    }


    class crud extends db {
        public function __construct(){
            parent::__construct();
        }
        public function indertdata($table,$query){
            $this->conn->query("INSERT INTO $table $query");
        }
        public function calldata($table,$query){
            $data = $this->conn->query("SELECT * FROM $table");
            return $data; 
        }
        public function deletedata($table , $id){
            $this->conn->query("DELETE FROM $table WHERE id = '$id'");
        }
        public function searchdata($table,$query){
            $data = $this->conn->query("SELECT * FROM $table WHERE $query");
            return $data ;
        }
        public function redirect($location){
            echo "<script> window.open('$location', '_self') </script>";
        }
        public function message($message){
            echo "<script>alert('$message')</script>";
        }
    }


?>