<a href="./index.php"><input class="btn btn-primary" type="submit" value="Return" name="Return "></a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<?php include_once("../includes/database.php"); ?>

<form action="../includes/traitement.php" method="POST">
    <label for="name_class">Class Name</label>
    <input type="text" class="form-control" name="name_class">
    <label for="num_class">Class Number</label>
    <input type="number" class="form-control" name="num_class">

    <input type="submit" value="Add class" name="add_class" class="btn btn-primary">


</form>