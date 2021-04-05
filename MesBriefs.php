<?php
session_start();
$num_class = $_SESSION['num_class'];

include_once("./includes/database.php");
$query_brief_display = "SELECT * FROM `briefs` WHERE `brief_class` = '$num_class'  ";   // WHERE BRIEF CLASS = USER CLASS
$result_brief_display = mysqli_query($link, $query_brief_display);
if (!$result_brief_display) {
    die("Connection X");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Briefs</title>
    <link rel="stylesheet" href="style/mybrief.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <style>
        p {
            height: 110px;
            overflow: hidden;
            text-overflow: ellipsis;
            text-decoration: none;
        }

        a {
            text-decoration: none;
            color: black;

        }
    </style>
</head>

<body>
    <?php include "./includes/headerasset.php" ?>



    <?php
    if (mysqli_num_rows($result_brief_display) > 0) {
        $i = 1;

        foreach ($result_brief_display as $row) :



    ?>
            <div class="briefscontainer<?php echo $i ?>">
                <a href="./MonBrief.php?id=<?php echo $row['brief_id']  ?>">
                    <div class="card">
                        <img src="assets/images/<?php echo $row['brief_img'];  ?>" alt="briefimg">

                        <h1>
                            <?php echo $row['brief_title'];  ?>
                        </h1>
                        <p>
                            <?php echo $row['brief_content'];  ?>
                        </p>

                    </div>

            </div>
            </a>
            <div class=" inputcontainer<?php echo $i ?>">
                <input type="submit" name="mybriefsubmit" id="" value="SUBMIT">
            </div>

        <?php
            $i++;
        endforeach;
    } else {


        ?>
        <h1 style="color: red; position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)">Pas de Brief en cours</h1>


    <?php  } ?>

    </div>

</body>

</html>