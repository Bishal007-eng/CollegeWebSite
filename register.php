<?php
include 'connection.php';

// $first_name = $last_name =$batch = $mail = $pass= "";
if(isset($_POST['register'])){
     $first_name = $_POST['Fname'];
     $last_name =  $_POST['Lname'];
     $batch = $_POST['faculty'];
     $mail = $_POST['Email'];
     $pass = $_POST['password'];
     $pass_code = password_hash($pass,PASSWORD_BCRYPT);
    $data = "INSERT INTO `register`(`Fname`, `Lname`, `faculty`, `email`, `password`) VALUES ('$first_name','$last_name','$batch','$mail','$pass_code')";

    $result = mysqli_query($conn,$data);
    
    
    if ($result){
        
        echo 'registered';
        header("location: login.php?=registered");

    }else{

        echo "error".$data.'<br/>'.mysqli_error($conn);
    }
}
mysqli_close($conn);
?>