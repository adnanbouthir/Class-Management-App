<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Sign Up</title>
</head>

<body>
    <main>

        <div class="center">
            <h1>Sign Up</h1>
            <p>create your account so that you can acess our platform</p>
            <form action="./includes/traitement.php" method="post">
                <input type="text" name="FName" placeholder="First Name" required>
                <input type="text" name="lName" placeholder="last Name" required>
                <input type="email" name="email" placeholder="Email Adress" required>
                <label for="date">birth year</label>
                <input type="date" name="birthday" id="" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="rpassword" placeholder="Password confirmation" required>
                <input type="reset" value="reset">
                <input type="submit" value="submit" name="signup_submit">
            </form>
        </div>


</body>

</html>