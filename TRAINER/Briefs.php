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
$query_brief_display = "SELECT * FROM `briefs`  ";
$result_brief_display = mysqli_query($link, $query_brief_display);
if (!$result_brief_display) {
    die("Connection X");
}

?>








<H1 style="color: red; margin-top:50px;">List des Briefs</H1>
<?php if (mysqli_num_rows($result_brief_display) > 0) { ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Brief Title</th>
                <th>Brief Img</th>
                <th>Brief Tag</th>
                <th>Brief Comp</th>
                <th>Brief Deadline</th>
                <th>Brief Content</th>
                <th>Brief Class</th>
                <th>Brief Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


        <?php



        while ($row = mysqli_fetch_assoc($result_brief_display)) {
            $brief_id = $row['brief_id'];
            $brief_title = $row['brief_title'];
            $brief_img = $row['brief_img'];
            $brief_tag = $row['brief_tag'];
            $brief_comp = $row['brief_comp'];
            $brief_deadline = $row['brief_deadline'];
            $brief_content = $row['brief_content'];
            $brief_class = $row['brief_class'];
            $brief_status = $row['is_done'];



            echo "<tr>";
            echo "<td>$brief_title</td>";
            echo "<td>$brief_img</td>";
            echo "<td>$brief_tag</td>";
            echo "<td>$brief_comp</td>";
            echo "<td>$brief_deadline</td>";
            echo "<td>$brief_content</td>";
            echo "<td>$brief_class</td>";
            if ($brief_status == '1') {
                echo "<td>En Cours</td>";
            } else {
                echo "<td>Terminé</td>";
            }


            echo "<td> <a style='color:green;'href='../includes/briefs-edit.php?updatebrief=$brief_id'> Update </a>/<a style='color:red;' href='../includes/brief_delte.php?deletebrief=$brief_id'> Delete </a></td>";
            echo "</tr>";
        }
    } else {
        echo "<h1 style='color: red;display:grid;place-items:center'>Aucun brief disponnible</h1>";
    }

        ?>



        </tr>
        </tbody>
    </table>


    </div>