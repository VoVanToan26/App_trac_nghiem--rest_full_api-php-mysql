<?php
include_once("../header/header.php");
header("Access-Control-Allow-Method: PUT");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Request-With");

$question = new Question($connect);
$data = json_decode(file_get_contents(("php://input"))); // input data
if ($data === NULL) {
    var_dump($data);
    die;
}
$question->id = $data->id;
$question->title = $data->title;
$question->case_a = $data->case_a;
$question->case_a = $data->case_a;
$question->case_b = $data->case_b;
$question->case_c = $data->case_c;
$question->answer = $data->answer;

if ($question->update()) {
    echo json_encode((array("message", "Question Updated")));
} else {
    echo json_encode((array("message", "Question Not Updated")));
}
