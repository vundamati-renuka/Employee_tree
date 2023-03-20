<?php
include('config.php');
if($_POST['action'] == "add"){

    
    $query = "insert into employee set 
    name = '" . mysqli_escape_string( $con, $_POST['name'] ) . "' ";    
    mysqli_query($con,$query);
    if(mysqli_error($con)){
        echo "there was an error ".mysqli_error($con);
        exit;
    }else{
        header("Location :index.php?event=StateSuccess");
        exit;
    }
    
}
?>