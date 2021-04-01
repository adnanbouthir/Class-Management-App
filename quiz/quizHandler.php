<?php
session_start();
require '../includes/connection.php';

$message = '';

if(isset($_POST['submitQuiz'])) {
    $answersArray = array();
    $correctAnswersArray = array();
    $userLoggedIn = $_POST['userLoggedIn'];
    $subject = $_POST['subject'];
    
    foreach($_POST as $key => $value) {
        if(strpos($key, 'question_answer_') !== false) {
            $value = mysqli_real_escape_string($con, $value);
            $value = str_replace(' ', '',$value);
            $value = strip_tags($value);
            $value = strtolower($value);
            $value = md5($value);
            $answersArray[] = $value;
        }
    }
    

    $query = 
        " SELECT `answer`" .
        " FROM `questions`" .
        " WHERE `subject` = '$subject'";
}
?>