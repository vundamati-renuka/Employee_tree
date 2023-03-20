<?php
$connection = mysqli_connect("localhost", "root", "", "office" );
if( mysqli_connect_error() ){
    echo "There was an error: " . mysqli_connect_error();
    exit;
}
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "office";
// $con =mysqli_connect($server,$username,$password,$database);
// // echo mysqli_connect_error();
// if($con){
//     // echo "connection succ";
// }else{
//     echo "connection failed";
// }

?>