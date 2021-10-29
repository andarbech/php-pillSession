<?php


// $email = "andrecito";
class DataBase
{
    //private  use to give a local scope
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "myfirst_db";
    private $port = "3306";

    function connect_db()
    {
        // this-> Use to pass param with local scope or similiar this in react 
        //this function allow to connect db
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->database, $this->port) or die("no connect with database");
        // if ($connection) {
        //     echo "connected";
        // } else {
        //     header("./index.php");
        // }
        return $connection;
    }

    //query is a param (order ) to send to db
    function read_db($query)
    {
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $query);

        if (!$result) {
            return false;
        } else {
            $data = false;
            while ($row = mysqli_fetch_assoc($result)) {
                return $data[] = $row;
            }
            return $data;
        }
    }

    function update_db($query)
    {
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $query);

        if (!$result) {
            return false;
        } else {
            $data = false;
            while ($row = mysqli_fetch_assoc($result)) {
                // this  Array contain Array with data inside de myfirst_db
                return $data[] = $row;
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";
            }
            return $data;
        }
    }
}

$DataBase = new DataBase();
// $query = "SELECT * FROM users";
// $data = $DataBase->read_db($query);
// print_r($data);


// $query = "SELECT * FROM `users`";


// echo "<pre>";
// print_r(mysqli_info($connection));
// echo "</pre>";
