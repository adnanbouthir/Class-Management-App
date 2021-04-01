<?php
session_start();
if (isset($_SESSION['username'])) {

    header("Location: ./MesBriefs.php ");
} else {

    var_dump($_SESSION);





?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <div class="headercontainer">
            <div class="header">
                <div class="headerlogo">
                    <img src="assets/images/logo.png" alt="logoyoucode">
                </div>
                <div class="headermenu">
                    <li>
                        <ul>
                            <a href=""> Sign In </a>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <a href=""> Sign Up </a>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <a href=""> About </a>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <a href=""> Support </a>
                        </ul>
                    </li>
                </div>
                <div class="languageselect">
                    <select name="Language" id="selectlng">
                        <option value="Language">Language --</option>
                        <option> Français </option>
                        <option> English </option>
                        <option> العربية </option>

                    </select>
                </div>
            </div>
        </div>
        <!-- header done -->



        <div class="bodycontainer">

            <div class="paragraphtitle">
                <h1>
                    La plateforme <span> collaborative </span> d'apprentissage en pédagogie active
                </h1>
                <br><br>
                <p>
                    Suivez votre parcours pédagogique en toute sécurité,<br>
                    Notre plateforme permet à ses membres d'accéder et de publier:<br>
                    Les Ressources de formation, Briefs, Rapports, Messages...
                </p>
                <br><br>
                <button type="submit">
                    Explore
                </button>

            </div>

            <div class="bgimage">
                <img src="assets/images/bgimg.png" alt="backgroundimg">
            </div>



        </div>

    </body>

    </html>


<?php   } ?>