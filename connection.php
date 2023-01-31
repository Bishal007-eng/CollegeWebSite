<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
// // $database2 = "admin";

// // MySQLi Procedural
// // CREATE CONNECTION
// $conn = mysqli_connect($servername, $username, $password, $database);
// // $conn2 = mysqli_connect($servername, $username, $password, $database2);

// // CHECK CONNECTION 
// if(!$conn){
//     die("Connection failded:"  .mysqli_connect_error());
// }
// // echo "Connected Successfully !";

$conn = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error())
{
    echo "Cannot connect";
}
// else
// {
//     echo "Connected";
// }


?>