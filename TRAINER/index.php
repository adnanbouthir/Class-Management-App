<?php

include_once("../includes/database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        var isOpen = false;
        $('#distable').on('mouseup', function() {
            if (isOpen) {
                var classe = this.value;

            }
            isOpen = !isOpen;
        });
    </script>
</head>

<body>


    <div class="col-xs-6">

















        <!-- VALIDATION BRIEF -->


















        <a href="./briefs-create.php"><input class="btn btn-primary" type="submit" value="Add Brief" name="add_brief"></a>

        <a href="./Liste_student.php"><input class="btn btn-primary" type="submit" value="Student List" name="list_student"></a>

        <a href="./add_class.php"><input class="btn btn-primary" type="submit" value="Add Class" name="add_class"></a>

        <a href="./validation_brief.php"><input class="btn btn-primary" type="submit" value="Validation" name="validation_bief"></a>


        <a href="./index.php"><input class="btn btn-primary" type="submit" value="Return" name="Return "></a>


        <?php $query = "SELECT * FROM users WHERE `num_class` = '0' ";
        $select_utilisateurs = mysqli_query($link, $query);
        if (mysqli_num_rows($select_utilisateurs) > 0) {
        ?>
            <h1>Etudiants en attente </h1>


            <?php include_once("../includes/database.php"); ?>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php   //Find all categories query




                    while ($row = mysqli_fetch_assoc($select_utilisateurs)) {
                        $user_id = $row['user_id'];
                        $user_fname = $row['user_fname'];
                        $user_lname = $row['user_lname'];
                        $user_birthday = $row['user_birthday'];
                        $num_class = $row['num_class'];
                        $user_email = $row['user_email'];


                        echo "<tr>";
                        echo "<td>$user_fname</td>";
                        echo "<td>$user_lname</td>";
                        echo "<td>$user_birthday</td>";
                        echo "<td>$num_class</td>";
                        echo "<td>$user_email</td>";
                        echo "<td><a href='./edituser.php?delete=$user_id'> Delete </a>/<a href='././edituser.php?update=$user_id'> Update </a></td>";
                        echo "</tr>";
                    }


                    ?>

                <?php


            } else {
                echo "<h1>Pas d'étudiants en attente</h1>";
            }
            if (isset($_GET['delete'])) {

                $del_user_id = $_GET['delete'];

                $query = "DELETE FROM users WHERE user_id = {$del_user_id}";

                $delete_query = mysqli_query($link, $query);
                header('Location: deletedbytrainer.php');
            }

                ?>

                </tr>
                </tbody>
            </table>




</body>

</html>