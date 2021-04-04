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


       




        

        
       


                



                <!-- VALIDATION BRIEF -->














                



        <a href="./briefs-create.php"><input class="btn btn-primary" type="submit" value="Add Brief" name="add_brief"></a>

        <a href="./Liste_student.php"><input class="btn btn-primary" type="submit" value="Student List" name="list_student"></a>

        <a href="./add_class.php"><input class="btn btn-primary" type="submit" value="Add Class" name="add_class"></a>

        <a href="./validation_brief.php"><input class="btn btn-primary" type="submit" value="Validation" name="validation_bief"></a>





</body>

</html>