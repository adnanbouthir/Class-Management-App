<?php

include_once('./database.php');
//signup Query


if (isset($_POST['signup_submit'])) {

    $Fname_signup = $_POST['FName'];
    $Lname_signup = $_POST['lName'];
    $birthday_signup = $_POST['birthday'];
    $email_signup = $_POST['email'];
    $password_signup = $_POST['password'];
    $rpassword_signup = $_POST['rpassword'];


    session_start();

    $email_query = "SELECT * FROM `users` WHERE user_email ='$email_signup'";
    $email_resultat = mysqli_query($link, $email_query);
} else if (mysqli_num_rows($email_resultat) > 0) {
    $_SESSION['email_taken'] = "Sorry... email already taken";
    header("Location: signup.php");
} else if ($password_signup != $rpassword_signup) {
    $_SESSION['pass_no_match'] = "Password doesn't match";
} else {
    $query_signup = "INSERT INTO `users`( `user_fname`, `user_lname`, `user_birthday`, `user_email`, `user_password`) VALUES ('$Fname_signup','$Lname_signup','$birthday_signup','$email_signup','$password_signup')";

    $result_signup = mysqli_query($link, $query_signup);
    header("Location: signin.php");
}


//signin querry



if (isset($_POST['signin_submit'])) {

    $email_signin = $_POST['email_signin'];
    $password_signin = $_POST['password_signin'];


    $signin_querry = "SELECT FROM `users` WHERE `user_email`='$email_signin' AND `user_password`='$password_signin' ";
    $signin_resultat = mysqli_query($link, $signin_querry);

    if (mysqli_num_rows($signin_resultat) > 0) {
        $row = mysqli_fetch_assoc($signin_resultat);

        $_SESSION['username'] = $row['user_email'];

        header("Location: index.php");
    }else{
        header("Location: signin.php?error=Sorry... username or password invalid");   //if isset
    }
}
