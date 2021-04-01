<?php
include_once("./includes/database.php");
$query_brief_display = "SELECT * FROM `briefs` ";
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
        }
    </style>
</head>

<body>
<?php include "./includes/headerasset.php" ?>



        <?php

        $i = 1;

        foreach ($result_brief_display as $row) :



        ?>
            <div class="briefscontainer<?php echo $i ?>">

                <a href="./includes/MonBrief.php?id=">
                    <div class="card">
                        <img src="assets/images/<?php echo $row['brief_img'];  ?>" alt="briefimg">

                        <h1>
                            <?php echo $row['brief_title'];  ?>
                        </h1>
                        <p>
                            <?php echo $row['brief_content'];  ?>
                        </p>

                    </div>
                </a>

            </div>
            <div class="inputcontainer<?php echo $i ?>">
                <input type="submit" name="mybriefsubmit" id="" value="SUBMIT">
            </div>

        <?php
            $i++;
        endforeach;  ?>





    </div>

</body>

</html>