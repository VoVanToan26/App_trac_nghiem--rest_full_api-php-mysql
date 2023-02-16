<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
include_once("../../config/db.php");
include_once("../../model/question.php");

$db = new db();
$connect = $db->connect();

$question = new Question($connect);
$read = $question->read();
$num = $read->rowCount();
$question_array['data'] = [];
if ($num > 0) {
    while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $question_array['data'][] =
            array(
                'id' => $row['id'],
                'title' => $row['title'],
                'case_a' => $row['case_a'],
                'case_a' => $row['case_a'],
                'case_b' => $row['case_b'],
                'case_c' => $row['case_c'],
                'answer' => $row['answer'],
            );
    }
    echo json_encode($question_array);
}
