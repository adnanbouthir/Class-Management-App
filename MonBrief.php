<?php
include_once("./includes/database.php");
if (isset($_GET['id'])) {


    $id_brief = $_GET['id'];
    $query_brief_display = "SELECT * FROM `briefs` WHERE `brief_id` = '$id_brief' ";
    $result_brief_display = mysqli_query($link, $query_brief_display);
    if (!$result_brief_display) {
        die("Connection X");
    }
} else {
    header("Location: error.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Briefs</title>
    <link rel="stylesheet" href="style/monbrief.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
    <?php include "./includes/headerasset.php" ?>


    <div class="skillscontainer">
    </div>
    <div class="skills">
        <p>
            Target skills:
        </p>
    </div>
    <div class="skillcontainer">
    </div>
    <div class="todo">
        <P>
            Create mock-ups for an application
        </P>
    </div>
    <div class="no">
        <img src="assets/images/no.png" alt="">
        Level1
    </div>

    <div class="no2">
        <img src="assets/images/no.png" alt="">
        Level2
    </div>

    <div class="yes">
        <img src="assets/images/yes.png" alt="">
        Level3
    </div>
    <!-- END FIRST SKILL -->




    <div class="skillcontainer1">
    </div>
    <div class="todo1">
        <P>
            Create a database
        </P>
    </div>
    <div class="no3">
        <img src="assets/images/no.png" alt="">
        Level1
    </div>

    <div class="no4">
        <img src="assets/images/no.png" alt="">
        Level2
    </div>

    <div class="yes1">
        <img src="assets/images/yes.png" alt="">
        Level3
    </div>
    <!-- END SECOND SKILL -->
    <div class="skillcontainer2">
    </div>
    <div class="todo2">
        <P>
            Develop a dynamic web user interface


        </P>
    </div>
    <div class="no5">
        <img src="assets/images/no.png" alt="">
        Level1
    </div>

    <div class="no6">
        <img src="assets/images/no.png" alt="">
        Level2
    </div>

    <div class="yes2">
        <img src="assets/images/yes.png" alt="">
        Level3
    </div>
    <!-- END third SKILL -->
    <div class="skillcontainer3">
    </div>
    <div class="todo3">
        <P>
            Develop data access
        </P>
    </div>
    <div class="no7">
        <img src="assets/images/no.png" alt="">
        Level1
    </div>

    <div class="no8">
        <img src="assets/images/no.png" alt="">
        Level2
    </div>

    <div class="yes3">
        <img src="assets/images/yes.png" alt="">
        Level3
    </div>
    <!-- END fourth skill -->



    <!-- start deadline -->
    <?php

    $i = 1;

    foreach ($result_brief_display as $row) :



    ?>

        <div class="RectangleDeadline">

        </div>


        <div class="DeadLineContainer">
            <img src="assets/images/deadlineicon.svg" alt="deadlineicon">
        </div>


        <div class="BriefDeadlineContent">
            <h1>
                Tic Tac Tic Tac Tic Tac...
            </h1>
        </div>



        <div class="BriefDeadline">
            <p>
                Il vous Rest X jours pour livré votre brief !
            </p>
        </div>








        <div class="BriefImage">
            <img src="assets/images/<?php echo $row['brief_img'];  ?>" alt="">
        </div>
        <div class="BriefImageContainer">

        </div>
        <div class="BriefContainer">

        </div>
        <div class="BriefTitleContainer">
            <h1>
                <?php echo $row['brief_title'];  ?>
            </h1>
        </div>
        <div class="BriefContentContainer">
            <p>
                <?php echo $row['brief_content'];  ?>
            </p>
        </div>


        <div class="BriefTagsContainer">

        </div>
        <div class="tag1">HTML5</div>
        <div class="tag2">P.H.P</div>
        <div class="tag3">MySQL</div>
        <div class="tag4">JavaScript</div>








    <?php

    endforeach;  ?>



</body>

</html>