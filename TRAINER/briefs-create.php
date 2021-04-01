<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>



    <form action="/Class-Management-App/includes/traitement.php" method="POST" enctype="multipart/form-data"
        style="width:50% ; margin-left:25%">



        <div class="form-group">
            <label for="brief_title">Brief Title</label>
            <input class="form-control" type="text" name="brief_title">
        </div>
        <div class="form-group">
            <input class="form-control" type="hidden" name="brief_author">
        </div>
        <div class="form-group">
            <label for="brief_comp">Brief comp</label>
            <input class="form-control" type="text" name="brief_comp">
        </div>
        <div class="form-group">
            <label for="brief_image">Brief Image</label>
            <input class="form-control" type="file" name="brief_img">
        </div>
        <div class="form-group">
            <label for="brief_tags">Brief Tags</label>
            <input class="form-control" type="text" name="brief_tag">
        </div>
        <div class="form-group">
            <label for="brief_content">Brief Content</label>
            <textarea class="form-control" name="brief_content" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="brief_tags">Brief deadline</label>
            <input class="form-control" type="date" name="brief_deadline">
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Add Brief" name="add_brief">


    </form>

</body>

</html>
<?php