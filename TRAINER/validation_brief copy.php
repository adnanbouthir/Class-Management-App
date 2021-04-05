<?php include_once("../includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<a href="./index.php"><input class="btn btn-primary" type="submit" value="Return" name="Return "></a>

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


<form action="" method="POST">
    <?php //assignclass.php 

    ?>
    <select name="brief_class" id="distable">

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


<?php if (!empty($_POST['brief_class'])) :
    $brief_class = $_POST['brief_class'];
    $display_class_membre = "SELECT * FROM `users` WHERE `num_class`='$brief_class'";
    $membre_result = mysqli_query($link, $display_class_membre);

    if (mysqli_num_rows($membre_result) > 0) {

?>

        <H1 style="color: red; margin-top:50px;">Validation Brief</H1>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Fist Name</th>
                    <th>Last Name</th>
                    <th>Class</th>
                    <th>Current Brief</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                <?php   //Find all categories query









                $query = "SELECT * FROM briefs INNER JOIN users INNER JOIN brief_status ON briefs.brief_class = '$brief_class' AND users.num_class = '$brief_class' AND briefs.brief_id = brief_status.id WHERE `user_role`='1' AND `is_done`= '0'";
                $select_utilisateurs = mysqli_query($link, $query);

                while ($row = mysqli_fetch_assoc($select_utilisateurs)) {
                    $user_id = $row['user_id'];
                    $user_fname = $row['user_fname'];
                    $user_lname = $row['user_lname'];
                    $num_class = $row['num_class'];
                    $user_brief = $row['brief_title'];
                    $brief_id = $row['brief_id'];



                    echo "<tr>";
                    echo "<td>$user_fname</td>";
                    echo "<td>$user_lname</td>";
                    echo "<td>$num_class</td>";
                    echo "<td>$user_brief</td>";

                    $validation_check_query = "SELECT * FROM `brief_status` WHERE `user_id` = '$user_id' AND `brief_id` = '$brief_id' AND `brief_status` = '1' OR '0'";
                    $result_validation = mysqli_query($link, $validation_check_query);

                    $row = mysqli_fetch_assoc($result_validation);


                    if (mysqli_num_rows($result_validation) > 0) {

                        if ($row['brief_status'] == 1) {
                            echo "<td> brief validé </td>";
                        } elseif ($row['brief_status'] == 0) {

                            echo "<td> brief non validé </td>";
                        } else {
                            echo $row['brief_status'];
                            echo "<td> <a style='color:green;'href='../includes/traitement.php?valider=$user_id&usbri=$brief_id'> Valider </a>/<a style='color:red;' href='../includes/traitement.php?nonvalider=$user_id&usbri=$brief_id'> Ne pas valider </a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<td> <a style='color:green;'href='../includes/traitement.php?valider=$user_id&usbri=$brief_id'> Valider </a>/<a style='color:red;' href='../includes/traitement.php?nonvalider=$user_id&usbri=$brief_id'> Ne pas valider</a></td>";
                        echo "</tr>";
                    }
                }

                ?>



                </tr>
            </tbody>
        </table>


        </div>

<?php }
endif;

?>