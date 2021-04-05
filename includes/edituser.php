<a href="https://localhost/Class-Management-App/TRAINER/Briefs.php"><input class="btn btn-primary" type="submit" value="Return" name="Return "></a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<?php

include_once("../includes/database.php");





if (isset($_GET['delete'])) {
    $delete_user = $_GET['delete'];
    $query_delete = "DELETE FROM `users` WHERE `user_id`= '$delete_user' ";

    $result_delete = mysqli_query($link, $delete_user);
    header("Location: index.php");
}



if (isset($_GET['update'])) :
    $update_id = $_GET['update'];





?>




    <?php   //Find all categories query

    $query = "SELECT * FROM `users` WHERE `user_id`='$update_id'";
    $select_utilisateurs = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($select_utilisateurs)) {
        $user_id = $row['user_id'];
        $user_fname = $row['user_fname'];
        $user_lname = $row['user_lname'];
        $user_birthday = $row['user_birthday'];
        $num_class = $row['num_class'];
        $user_email = $row['user_email'];
    }


    ?>



    </tr>
    </tbody>
    </table>



    <form action="../includes/traitement.php" method="POST">

        <input type="hidden" value="<?php echo $update_id ?>" name="user_id">

        <div class="form-group">
            <label for="f_name">First Name</label>
            <input value=" <?php echo $user_fname ?>" class="form-control" type="text" name="user_fname" disabled>
        </div>

        <div class="form-group">
            <label for="post_author">Last Name</label>
            <input value=" <?php echo $user_lname ?>" class="form-control" type="text" name="user_lname" disabled>
        </div>
        <div class="form-group">
            <label for="post_status">Birth day</label>
            <input value=" <?php echo $user_birthday ?>" class="form-control" type="text" name="user_birthday" disabled>
        </div>
        <div class="form-group">

            <select name="num_class">
                <?php
                $query_cat = "SELECT * FROM class ";
                $select_categories_id = mysqli_query($link, $query_cat);

                while ($row = mysqli_fetch_assoc($select_categories_id)) {
                    $num_class  = $row['num_class'];
                    $name_class = $row['name_class'];




                    echo "<option value='$num_class'>{$name_class}</option>";
                } ?>

            </select>
        </div>
        <div class="form-group">
            <label for="post_content">Email</label>
            <input class="form-control" name="post_content" disabled value="<?php echo $user_email ?>"></input>
        </div>


        <input class="btn btn-primary" type="submit" value="Update Post" name="update_class">


    </form>









<?php endif;  ?>