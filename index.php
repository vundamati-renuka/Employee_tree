<?php
require("action.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    	<?php if($_GET['go']=="add") {?>
            <form action="" method="post">
                <div>
                    Enter Emoloyee Id:
                    <input type="text" name="parent_id" value="" class="form-control form-control-sm w-25">
                </div>
                <div>
                    Enter Emoloyee Name:
                    <input type="text" name="name" value="" class="form-control form-control-sm w-25">
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Add Data">
                <input type="hidden" name="action" value="add">
            </form>
        <?php }else {
            include('home.php');}?>
    </div>
</body>
</html>