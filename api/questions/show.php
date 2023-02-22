<?php
include_once("../header/header.php");

$question = new Question($connect);
$question->id = isset($_GET["id"]) ? $_GET["id"] : die();
$question->show();

$question_item= array(
    'id' => $question->id,
    'title' => $question->title,
    'case_a' => $question->case_a,
    'case_a' => $question->case_a,
    'case_b' => $question->case_b,
    'case_c' => $question->case_c,
    'answer' => $question->answer
);

echo json_encode($question_item);
