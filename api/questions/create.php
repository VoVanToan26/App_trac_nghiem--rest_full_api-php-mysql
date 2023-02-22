<?php
include_once("../header/header.php");
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Request-With");

$question = new Question($connect);
// get data from api
$data=json_decode(file_get_contents(("php://input")));
if($data===NULL){
    die;
}
$question->title=$data->title;
$question->case_a=$data->case_a;
$question->case_a=$data->case_a;
$question->case_b=$data->case_b;
$question->case_c=$data->case_c;
$question->answer=$data->answer;

if($question->create()){
    echo json_encode((array("message","Question Created")));
}else{
    echo json_encode((array("message", "Question Not Created")));
}
