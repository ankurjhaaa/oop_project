<?php
// class db
// {
//     public $connect;
//     public $hostname = "localhost";
//     public $username = "root";
//     public $password = "";
//     public $database = "oop_first";

//     public function __construct()
//     {
//         $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->database);
//     }

// }

// class tudu extends db
// {
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function insert($table, $query)
//     {
//         $this->connect->query("INSERT INTO $table $query");
//     }

//     public function call($table)
//     {
//         $users = $this->connect->query("SELECT * FROM $table");
//         return $users;
//     }

//     public function redirect($location)
//     {
//         echo "<script> window.open('$location', '_self') </script>";
//     }
// }

// $tudu = new tudu();




class db
{
    public $conn;
    public $localhost = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "oop_first";

    public function __construct()
    {
        $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->database);
    }
}


class crud extends db
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertdata($table, $query)
    {
        $this->conn->query("INSERT INTO $table $query");
    }
    public function calldata($table)
    {
        $data = $this->conn->query("SELECT * FROM $table");
        return $data;
    }
    public function deletedata($table, $id)
    {
        $this->conn->query("DELETE FROM $table WHERE id = '$id'");
    }
    public function searchdata($table, $query)
    {
        $data = $this->conn->query("SELECT * FROM $table WHERE $query");
        return $data;
    }
    public function redirect($location)
    {
        echo "<script> window.open('$location', '_self') </script>";
    }
    public function message($message)
    {
        echo "<script>alert('$message')</script>";
    }

    public function signup($table,$query)
    {
        $this->conn->query("INSERT INTO $table $query");
    }

    public function login($table,$email,$password){
        $this->conn->query("SELECT * FROM $table WHERE email = '$email' AND password = '$password'");
    }
}


$crud = new crud();
?>