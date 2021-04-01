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

                $query = "SELECT * FROM users";
                $select_utilisateurs = mysqli_query($link, $query);

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
                    echo "<td> <a href='./index.php?delete=$user_id'> Delete </a>/<a href='././index.php?update=$user_id'> Update </a></td>";
                    echo "</tr>";
                }

                ?>

                <?php

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




        <?php //addclass.php 
        ?>

        <form action="../includes/traitement.php" method="POST">

            <input type="text" name="name_class">

            <input type="number" name="num_class">

            <input type="submit" value="Add class" name="add_class">


        </form>
        <form action="index.php" method="POST">
            <?php //assignclass.php 
            ?>
            <select name="num_class" id="distable">
                <?php
                $display_class_query = "SELECT * FROM `class`";

                $class_result = mysqli_query($link, $display_class_query);

                foreach ($class_result as $row) {
                    $name_class = $row['name_class'];
                    $num_class = $row['num_class'];
                    echo "<option value='$num_class'>$name_class</option>";
                }


                ?>
                <input type="submit" value="display class">
            </select>

        </form>




<!-- Display class list -->


        <?php if (!empty($_POST['num_class'])) :
            $num_class = $_POST['num_class'];
            $display_class_membre = "SELECT * FROM `users` WHERE `num_class`='$num_class'";
            $membre_result = mysqli_query($link, $display_class_membre); ?>


            <div class="col-xs-6">

                <h1>Liste d'étudiant de la classe <?php echo $num_class; ?></h1>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Fist Name</th>
                            <th>Last Name</th>
                            <th>Birthday</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th><?php echo $num_class; ?></th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php   //Find all categories query



                        while ($row = mysqli_fetch_assoc($membre_result)) {
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
                            echo "<td> <a href='./index.php?delete=$user_id'> Delete </a>/<a href='././index.php?update=$user_id'> Update </a></td>";
                            echo "</tr>";
                        }

                        ?>








                    <?php
                endif;

                    ?>


            </div>




</body>

</html>