<?php
class Question
{
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
    public function __construct($connect)
    {
        $this->conn = $connect;
    }
    public function read()
    {
        $query = "SELECT * FROM questions  ORDER BY id DESC;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(); // thực thi
        return $stmt;
    }
    public function show()
    {
        $query = "SELECT * FROM questions WHERE id=? ORDER BY id DESC;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id); // 1 là số tham số
        $stmt->execute(); // thực thi
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->case_a = $row['case_a'];
            $this->case_b = $row['case_b'];
            $this->case_c = $row['case_c'];
            $this->case_d = $row['case_d'];
            $this->answer = $row['answer'];
        } else {
            $this->id = null;
        }
    }
    // create Data
    public function create()
    {
        $query = "INSERT INTO questions SET title=:title,case_a=:case_a,case_b=:case_b,case_c=:case_c,case_d=:case_d,answer=:answer";
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->case_a = htmlspecialchars(strip_tags($this->case_a));
        $this->case_b = htmlspecialchars(strip_tags($this->case_b));
        $this->case_c = htmlspecialchars(strip_tags($this->case_c));
        $this->case_d = htmlspecialchars(strip_tags($this->case_d));
        $this->answer = htmlspecialchars(strip_tags($this->answer));
        $stmt->bindParam(":title", $this->title); // 1 là số tham số
        $stmt->bindParam(":case_a", $this->case_a); // 1 là số tham số
        $stmt->bindParam(":case_b", $this->case_b); // 1 là số tham số
        $stmt->bindParam(":case_c", $this->case_c); // 1 là số tham số
        $stmt->bindParam(":case_d", $this->case_d); // 1 là số tham số
        $stmt->bindParam(":answer", $this->answer); // 1 là số tham số

        if ($stmt->execute()) {
            return true;
        }
        echo("Error
        $stmt->error");
        return false;
    }

    public function update()
    {
        $query = "UPDATE questions SET title=:title,case_a=:case_a,case_b=:case_b,case_c=:case_c,case_d=:case_d,answer=:answer WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->case_a = htmlspecialchars(strip_tags($this->case_a));
        $this->case_b = htmlspecialchars(strip_tags($this->case_b));
        $this->case_c = htmlspecialchars(strip_tags($this->case_c));
        $this->case_d = htmlspecialchars(strip_tags($this->case_d));
        $this->answer = htmlspecialchars(strip_tags($this->answer));
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":title", $this->title); //truyền tham số
        $stmt->bindParam(":case_a", $this->case_a); //truyền tham số
        $stmt->bindParam(":case_b", $this->case_b); //truyền tham số
        $stmt->bindParam(":case_c", $this->case_c); //truyền tham số
        $stmt->bindParam(":case_d", $this->case_d); //truyền tham số
        $stmt->bindParam(":answer", $this->answer); //truyền tham số
        $stmt->bindParam(":id", $this->id); //truyền tham số

        if ($stmt->execute()) {
            return true;
        }
        echo ("Error
        $stmt->error");
        return false;
    }
    //Delete 
    public function delete()
    {
        $query = "DELETE FROM questions WHERE id=:id ORDER BY id DESC;";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id); //truyền tham số

        if ($stmt->execute()) {
            return true;
        }
        echo ("Error
        $stmt->error");
        return false;
    }
}
