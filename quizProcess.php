<?php if(!isset($_GET['subject']) && !isset($_POST['subject'])) {
    header("Location: ");    
    exit();
}

if($userRole > 1) {
    header("Location:");    
    exit();
}

if(isset($_POST['subject'])) {
    $subject = $_POST['subject'];   
}

$query = 
    " SELECT * " .
    " FROM `questions`" .
    " WHERE `subject`='$subject'";

$result = mysqli_query($con, $query);

$totalQuestions = mysqli_num_rows($result);


$questionNumber = (int)$totalQuestions + 1;

?>
