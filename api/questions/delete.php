<?php
include_once("../header/header.php");
header("Access-Control-Allow-Method: DELETE");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Request-With");

$question = new Question($connect);
$data = json_decode(file_get_contents(("php://input"))); // input data
if ($data === NULL) {
    var_dump($data);
    die;
}
$question->id = $data->id;

if ($question->delete()) {
    echo json_encode((array("message", "Question Deleted")));
} else {
    echo json_encode((array("message", "Question Not Deleted")));
}
