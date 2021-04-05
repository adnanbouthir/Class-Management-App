<?php include_once("../includes/database.php");

if (isset($_GET['updatebrief'])) {
    $brief_id = $_GET['updatebrief'];

    $sql = "SELECT * FROM `briefs`  WHERE `brief_id` = '$brief_id' ";
    $sql_result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($sql_result);

    $brief_id = $row['brief_id'];
    $brief_title = $row['brief_title'];
    $brief_img = $row['brief_img'];
    $brief_tag = $row['brief_tag'];
    $brief_comp = $row['brief_comp'];
    $brief_deadline = $row['brief_deadline'];
    $brief_content = $row['brief_content'];
    $brief_class = $row['brief_class'];
    $brief_status = $row['is_done'];

?>
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

    <body>



        <form action="" method="POST" enctype="multipart/form-data" style="width:50% ; margin-left:25%">



            <div class="form-group">
                <label for="brief_title">Brief Title</label>
                <input class="form-control" type="text" name="brief_title" value="<?php echo $brief_title  ?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" name="brief_id" value="<?php echo $brief_id ?>">
            </div>
            <div class="form-group">
                <label for="brief_comp">Brief comp</label>
                <input class="form-control" type="text" name="brief_comp" value="<?php echo $brief_comp  ?>">
            </div>
            <div class="form-group">

                <label for="brief_comp">Brief class</label>
                <select name="brief_class" id="distable" class="form-control">

                    <?php
                    $display_class_query = "SELECT * FROM `class`";

                    $class_result = mysqli_query($link, $display_class_query);
                    foreach ($class_result as $row) {
                        $name_class = $row['name_class'];
                        $num_class = $row['num_class'];
                        echo "<option value='$num_class'>$name_class</option>";
                    }

                    ?>

                </select>
            </div>
            <div class="form-group">

                <label for="brief_img">Brief Image</label><br>
                <img src="../assets/images/<?php echo $brief_img ?>" class='img-responsive' width="200">
                <input type="file" name="brief_img" class="form-control">
            </div>
            <div class="form-group">
                <label for="brief_tags">Brief Tags</label>
                <input class="form-control" type="text" name="brief_tag" value="<?php echo $brief_tag  ?>">
            </div>
            <div class="form-group">
                <label for="brief_content">Brief Content</label>
                <textarea class="form-control" name="brief_content" cols="30" rows="10"><?php echo $brief_content ?></textarea>
            </div>

            <div class="form-group">
                <label for="brief_tags">Brief deadline</label>
                <input class="form-control" type="date" name="brief_deadline" value="<?php echo $brief_deadline  ?>">
            </div>
            <div class="form-group">
                <label for="brief_tags">Brief Status</label>
                <select name="is_done" id="distable" class="form-control">

                    <?php
                    if ($brief_status == '1') {
                        echo "<option value='1'>En Cours</option>";
                        echo "<option value='0'>Terminé</option>";
                    } else {
                        echo "<option value='0'>Terminé</option>";
                        echo "<option value='1'>En Cours</option>";
                    }

                    ?>

                </select>
            </div>

            <br>

            <input class="btn btn-primary" type="submit" value="Update Brief" name="update_brief">


        </form>

    </body>

    </html>
<?php  }

if (isset($_POST['update_brief'])) {

    $brief_id = $_POST['brief_id'];

    $brief_title = $_POST['brief_title'];


    $brief_img = $_FILES['brief_img']['name'];

    $brief_img_temp = $_FILES['brief_img']['tmp_name'];


    $destination_path = "C:\\xampp\htdocs\Class-Management-App\assets\images\\";                ///// A COMPRENDRE
    $target_path = $destination_path . basename($brief_img);
    move_uploaded_file($brief_img_temp, $target_path);

    $brief_tag = $_POST['brief_tag'];

    $brief_comp = $_POST['brief_comp'];

    $brief_deadline = $_POST['brief_deadline'];

    $brief_content = $_POST['brief_content'];

    $is_done = $_POST['is_done'];

    $brief_class = $_POST['brief_class'];
    if (empty($brief_img)) {
        $image_query = "SELECT * FROM `briefs` WHERE brief_id = '$brief_id'";
        $result_image = mysqli_query($link, $image_query);
        $imagerow = mysqli_fetch_assoc($result_image);
        $brief_img = $imagerow['brief_img'];
    }
    var_dump($_POST);
    var_dump($brief_img);

    $add_post_querry = "UPDATE `briefs`SET  `brief_title`='$brief_title',`brief_img`='$brief_img',`brief_tag`='$brief_tag',`brief_comp`='$brief_comp',`brief_deadline`='$brief_deadline',`brief_content`='$brief_content',`brief_class`='$brief_class' , `is_done`='$is_done' WHERE `brief_id` = '$brief_id' ";




    $add_post_result = mysqli_query($link, $add_post_querry);

    if (!$add_post_result) {

        die("Fatal error");
    }


    header("Location: https://localhost/Class-Management-App/TRAINER/Briefs.php");
}













?>