<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style/signin.css">
</head>

<body>
    <div class="top">
        <div class="text">
            <p>
                You must Sign In first!
            </p>
            <P>
                <b> Don't have one ? </b>
            </P>
            <P>
                No worries Create an account below.
            </P>
        </div>
    </div>

    <!-- <div class="bot">
        <div class="signinbg">
            <img src="assets/images/singinbg.png" alt="signinlogo">
        <div class="signincontainer">
            <P>hi</P>
        </div>
        </div>

    </div> -->

    <div class="bot">
        <div class="divleft">
            <img src="assets/images/singinbg.png" alt="signinbg">
        </div>

        <div class="divmiddle">
            <li>
                <ul>
                    <a href="#" style="font-weight: 900;">
                        Sign in
                    </a>
                    <a href="#" style="font-weight: 100;">
                        Sign up
                    </a>
                </ul>
            </li>

            <div class="formcontainer">
                <form action="./includes/traitement.php" method="post" class="signinform">
                    <input type="email" name="signin_email" placeholder="Email" class="email" required>
                    <input type="password" name="signin_password" placeholder="password" class="password" required>
                    <input type="submit" name="signin_submit" value="Sign in" class="signin">
            </div>

        </div>



        <div class="divright"></div>
    </div>
</body>

</html>