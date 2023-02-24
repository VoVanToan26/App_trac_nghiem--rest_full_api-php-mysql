<?php
include_once("../header/header.php");

$question = new Question($connect);
$read = $question->read();
$num = $read->rowCount();
$question_array['questions'] = [];
if ($num > 0) {;
    while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $question_array['questions'][] = array(
            'id' => $id,
            'title' => $title,
            'case_a' => $case_a,
            'case_b' => $case_b,
            'case_c' => $case_c,
            'case_d' => $case_d,
            'answer' => $answer
        );
    }
    echo json_encode($question_array);
    if (json_last_error() !== JSON_ERROR_NONE) {
        // Handle the error however you want
        die("Failed to encode data as JSON: " . json_last_error_msg());
    }
}
