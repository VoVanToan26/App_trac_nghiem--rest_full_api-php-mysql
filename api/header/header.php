<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");

include_once("../../config/db.php");
include_once("../../model/question.php");

$db = new db();
$connect = $db->connect();
?>