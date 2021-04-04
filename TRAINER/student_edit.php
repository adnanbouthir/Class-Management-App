<?php include_once("../includes/database.php") ; ?>

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
            echo "<td><a href='./edituser.php?delete=$user_id'> Delete </a>/<a href='././edituser.php?update=$user_id'> Update </a></td>";
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