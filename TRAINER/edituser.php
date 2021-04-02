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

    $user_edit = "SELECT * FROM `users` WHERE `user_id`='$update_id' ";

    $user_result = mysqli_query($link, $user_edit);
    $user_id = $row['user_id'];
    $user_fname = $row['user_fname'];
    $user_lname = $row['user_lname'];
    $user_birthday = $row['user_birthday'];
    $num_class = $row['num_class'];
    $user_email = $row['user_email'];




?>
    <form action="">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Fist Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Class</th>
                    <th>Email</th>
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
                    echo "<td><input type='number' value='$num_class ?>'></td>";
                    echo "<td>$user_email</td>";

                    echo "</tr>";
                }


                ?>



                </tr>
            </tbody>
        </table>







    </form>

    <?php echo $user_  ?>


<?php endif;  ?>