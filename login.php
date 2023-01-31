<?php

include 'connection.php';
session_start();

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['Fname'];

    $query = "SELECT * FROM `register` WHERE email='" . $email . "' AND password = '" . $password . "'" ;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    
    $pass_code = password_hash($password, PASSWORD_BCRYPT);
    $pass_check = password_verify($password, $pass_code);
    if ($pass_check) {

        $_SESSION['username']= $email;
        header("location:./user.php");
    } else {
        echo "Incorrect Email and Password";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kathmandu BernHardt College</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="images/fav.jpg">

</head>

<body>


    <section class="header">
        <nav>
            <a href="index.html"><img src="images/header_logo.png" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about-section">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="login.php">Login/Signup</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>


        <div class="form-box">

            <div class="button-box">

                <div id="btn"></div>
                <button type="button" onclick='login()' class='toggle-btn'>Log In</button>
                <button type="button" onclick='register()' class='toggle-btn'>Register</button>
            </div>

            <form id='login' class='input-group-login' method="POST">
                <input type='text' class='input-field' name="email" placeholder='Email Id' required>
                <input type='password' class='input-field' name="password" placeholder='Enter Password' required>
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button type='submit' name="save" class='submit-btn1'>Log in</button>

                <div class="portal">
                    <a href="admin_login.php" class="admin">Log-in as Admin ?</a>
                </div>

            </form>

            <form id='register' action="register.php" method="POST" class='input-group-register'>
                <input type='text' class='input-field' name='Fname' placeholder='First Name' required>
                <input type='text' class='input-field' name='Lname' placeholder='Last Name ' required>
                <input type='text' class='input-field' name='faculty' placeholder='Faculty' required>
                <input type='email' class='input-field' name='Email' placeholder='Email Id' required>
                <input type='password' class='input-field' name="password" placeholder='Enter Password' required>
                <input type='password' class='input-field' name="confirm_password" placeholder='Confirm Password' required>
                <input type='checkbox' class='check-box' required><span>I agree to the terms and conditions</span>
                <button type='submit' class='submit-btn1' name="register">Register</button>
            </form>



        </div>
        </div>
    </section>

    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        var navlinks = document.getElementById("navlinks");

        function showmenu() {
            navlinks.style.right = "0";
        }

        function hidemenu() {
            navlinks.style.right = "-200px";
        }
    </script>


</body>

</html>