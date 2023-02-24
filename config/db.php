<?php
// connect db by PDO
// mysqli
// PDO support 12 type 

class db
{
    private     $servername = "localhost";
    private     $username = "root";
    private     $password = "";
    private     $dbname = "rest_full_api";
    public      $conn;
    public function connect()
    {

        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
