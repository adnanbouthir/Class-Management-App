<?php

include_once('./database.php');
//signup Query
$message = '';

if (isset($_POST['signup_submit'])) {

    $Fname_signup = $_POST['FName'];
    $Lname_signup = $_POST['lName'];
    $birthday_signup = $_POST['birthday'];
    $email_signup = $_POST['email'];
    $password_signup = $_POST['password'];
    $rpassword_signup = $_POST['rpassword'];

    // Clean form input :
    $Fname_signup = strip_tags($Fname_signup);
    $Fname_signup = str_replace(' ', '', $Fname_signup);
    $Fname_signup = strtolower($Fname_signup);

    $Lname_signup = strip_tags($Lname_signup);
    $Lname_signup = str_replace(' ', '', $Lname_signup);
    $Lname_signup = strtolower($Lname_signup);

    $email_signup = strip_tags($email_signup);
    $email_signup = str_replace(' ', '', $email_signup);
    $email_signup = strtolower($email_signup);





    session_start();

    $email_query = "SELECT * FROM `users` WHERE user_email ='$email_signup'";
    $email_resultat = mysqli_query($link, $email_query);
    if (mysqli_num_rows($email_resultat) > 0) {
        // $_SESSION['email_taken'] = "Sorry... email already taken";
        header("Location: ../signup.php");
    } else if ($password_signup != $rpassword_signup) {
        // $_SESSION['pass_no_match'] = "Password doesn't match";
    } else {

        $password_signup = md5($password_signup);
        $query_signup = "INSERT INTO `users`( `user_fname`, `user_lname`, `user_birthday`, `user_email`, `user_password` , `user_role`) VALUES ('$Fname_signup','$Lname_signup','$birthday_signup','$email_signup','$password_signup','1')";

        $result_signup = mysqli_query($link, $query_signup);
        header("Location: http://localhost/Class-Management-App/signin.php");
    }
}
//signin querry



if (isset($_POST['signin_submit'])) {
    session_start();
    $email_signin = $_POST['signin_email'];
    $password_signin = $_POST['signin_password'];
    $password_signin = md5($password_signin);


    $signin_querry = "SELECT * FROM `users` WHERE `user_email`='$email_signin' AND `user_password`='$password_signin' ";
    $signin_resultat = mysqli_query($link, $signin_querry);

    if (mysqli_num_rows($signin_resultat) > 0) {
        $row = mysqli_fetch_assoc($signin_resultat);

        $_SESSION['username'] = $row['user_email'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['num_class'] = $row['num_class'];
        if ($row['user_role'] == "2") {
            header("Location: ../TRAINER/index.php");
        } else {
            header("Location: ../MesBriefs.php");
        }
    } else {
        header("Location: ../signin.php?error=Sorry... username or password invalid");   //if isset
    }
}



// create brief querry

if (isset($_POST['add_brief'])) {

    $brief_title = $_POST['brief_title'];


    $brief_img = $_FILES['brief_img']['name'];

    $brief_img_temp = $_FILES['brief_img']['tmp_name'];


    $destination_path = "C:\\xampp\htdocs\Class-Management-App\assets\images\\";                ///// A COMPRENDRE
    $target_path = $destination_path . basename($brief_img);
    move_uploaded_file($brief_img_temp, $target_path);

    $brief_tag = $_POST['brief_tag'];

    $brief_comp = $_POST['brief_comp'];

    $brief_deadline = $_POST['brief_deadline'];

    $brief_content = $_POST['brief_content'];


    $brief_class = $_POST['brief_class'];

    $add_post_querry = "INSERT INTO `briefs`( `brief_title`, `brief_img`, `brief_tag`, `brief_comp`, `brief_deadline`, `brief_content`, `brief_class` , `is_done`) VALUES ('$brief_title','$brief_img','$brief_tag','$brief_comp','$brief_deadline','$brief_content','$brief_class' , '0')";




    $add_post_result = mysqli_query($link, $add_post_querry);

    if (!$add_post_result) {

        die("Fatal error");
    }

    $brief_query = "SELECT * FROM briefs ORDER BY `brief_id`DESC LIMIT 1  ";
    $result_brief = mysqli_query($link, $brief_query);
    $raw = mysqli_fetch_assoc($result_brief);
    $brief_id_unique = $raw['brief_id'];


    $query = "SELECT * FROM briefs INNER JOIN users ON briefs.brief_class = '$brief_class' AND users.num_class = '$brief_class'";
    $select_utilisateurs = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($select_utilisateurs)) {
        $user_id = $row['user_id'];
        $brief_id = $row['brief_id'];



        $add_class_brief = "INSERT INTO brief_status(user_id,brief_id,brief_status)
    SELECT user_id , brief_id , '5'
    FROM users INNER JOIN briefs
    ON users.user_id = '$user_id' AND briefs.brief_id = '$brief_id'
    WHERE users.user_role = '1' AND briefs.brief_id = '$brief_id_unique' ";
        $add_class_result = mysqli_query($link, $add_class_brief);
    }



    header("Location: ../TRAINER/Briefs.php");
}













//validation

if (isset($_GET['valider'])) {

    $user_id_valider = $_GET['valider'];
    $user_brief = $_GET['usbri'];

    $query = "UPDATE `brief_status` SET `brief_status`= '1' WHERE  user_id = '$user_id_valider' AND brief_id = '$user_brief'";

    $valider_query = mysqli_query($link, $query);
    header("Location: https://localhost/Class-Management-App/TRAINER/validation_brief.php");
}
if (isset($_GET['nonvalider'])) {

    $user_id_valider = $_GET['nonvalider'];
    $user_brief = $_GET['usbri'];

    $query = "UPDATE `brief_status` SET `brief_status`= '0' WHERE  user_id = '$user_id_valider' AND brief_id = '$user_brief'";

    $valider_query = mysqli_query($link, $query);
    header("Location: https://localhost/Class-Management-App/TRAINER/validation_brief.php");
}


//update class


if (isset($_POST['update_class'])) {

    $num_class = $_POST['num_class'];
    $user_id = $_POST['user_id'];

    $update_class_query = "UPDATE `users` SET `num_class` = '$num_class' WHERE `user_id` = '$user_id' ";
    $update_result = mysqli_query($link, $update_class_query);


    if (!$update_result) {
        die("fatal error");
    } else {
        header("Location: ../TRAINER/index.php");
    }
}
