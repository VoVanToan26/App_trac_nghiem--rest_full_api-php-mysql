<?php
// connect db by PDO
// mysqli
// PDO support 12 type 

class db
{
    private  $servername = "localhost";
    private    $username = "root";
    private    $password = "";
    private    $db_name = "rest_full_api";
    private    $charset = "UTF-8";
    public $conn;
    public function connect()
    {

        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name;charset = $this->charset", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
