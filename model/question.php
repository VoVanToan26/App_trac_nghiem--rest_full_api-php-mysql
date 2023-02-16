<?php
class Question{
    private $conn;

    //questions property
    public $id;
    public $title;
    public $case_a;
    public $case_b;
    public $case_c;
    public $case_d;
    public $answer;

    // connect db
    public function __construct($connect){
        $this->conn= $connect;
    }
    public function read(){
        $query= "SELECT * FROM questions  ORDER BY id DESC;";
        $stmt=$this->conn->prepare($query);
        $stmt->execute(); // thực thi
        return $stmt;
    }

}
?>