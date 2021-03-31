<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>Sign Up</title>
</head>

<body>
    <main>

        <div class="center">
            <br>
            <h1>Sign Up</h1>
            <br>
            <p>Create your account so that you can access our platform</p>
         </div>
            <div class="formcontainer"> 

            
            <form action="./includes/traitement.php" method="post">
                <input type="text" name="FName" placeholder="First Name" required>
                <input type="text" name="lName" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email Adress" required>
                <!-- <label for="date">birth year</label> -->
                <input type="date" name="birthday" id="" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="rpassword" placeholder="Password Confirmation" required>
<div class="subres"> 
                <input type="reset" value="Reset">
                <input type="submit" value="Register" name="signup_submit">
</div>
            </form>
        </div>
       

</body>

</html>