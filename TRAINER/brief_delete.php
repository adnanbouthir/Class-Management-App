

<?php
include_once("./includes/database.php");

if (isset($_GET['deletebrief'])) {

    $delete_id = $_GET['deletebrief'];

    $query_delete = "DELETE FROM `briefs` WHERE `brief_id` = '$delete_id'";

    $result_delete = mysqli_query($link, $query_delete);
}
