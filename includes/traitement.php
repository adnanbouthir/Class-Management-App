<?php

include_once('./database.php');
//signup Query


if (isset($_POST['signup_submit'])) {

    $Fname_signup = $_POST['Fname'];
    $Lname_signup = $_POST['Lname'];
    $birthday_signup = $_POST['birthday'];
    $email_signup = $_POST['email'];
    $password_signup = $_POST['password'];
    $rpassword_signup = $_POST['rpassword'];


    session_start();




    $email_query = "SELECT * FROM users WHERE user_email ='$email_signup'";
    $email_resultat = mysqli_query($link, $email_query);
} else if (mysqli_num_rows($email_resultat) > 0) {
    $_SESSION['erroremail'] = "Sorry... email already taken";
    header("Location: signup.php");
} else if ($password_signup != $rpassword_signup) {
    $_SESSION['pass_no_match'] = "Password doesn't match";
} else {
    $query_signup = "INSERT INTO `users`( `user_fname`, `user_lname`, `user_birthday`, `user_email`, `user_password`) VALUES ([$Fname_signup],[$Lname_signup],[$birthday_signup],[$email_signup,[$password_signup])";

    $result_signup = mysqli_query($link, $query);



    header("Location: login.php");
}
