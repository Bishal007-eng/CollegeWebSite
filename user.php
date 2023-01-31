<?php
require 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="icon" type="image/x-icon" href="images/fav.jpg">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .welcome {
            color: white;
            font-family: poppins;
            background-color: #6495ed;
            text-align: center;
        }
        .form{
            text-align: center;
            color: white;
        }
        .output{
            color: white;
        }
        .cmnt{
            color: white;
        }
    </style>

</head>


<body>
    <section class="header">
        <nav>
            <a href="#"><img src="images/header_logo.png" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li>
                        <form method="POST">
                            <button name="Logout">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>


        <div class="welcome">
            <h1 class="wel"><?php echo "Welcome  " . $_SESSION['username']; ?></h1>
        </div>

        <?php
        include 'connection.php';
       
        $username = $comment = "";
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $comment = $_POST['comment'];
            
            $sql = "INSERT INTO `users`(`username`, `blog`) VALUES ('$username','$comment')";

            $result = mysqli_query($conn,$sql);

            if($result){
                echo 'submited';
                header("location:user.php");
            }
            else{
                echo "error".$sql.'<br/>'.mysqli_error($conn);
            }
        }

        ?>
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Username:<br> <input type="text" name="username" value="<?php echo $username; ?> "required>
            <br><br>
            Create a Blog:<br> <textarea name="comment" rows="5" cols="15" required><?php echo $comment; ?></textarea>
            <br>
            <button name="submit">Submit</button>
        </form>

       

     
       



        <?php
        if (isset($_POST['Logout'])) {
            session_destroy();
            header("location:./login.php");
        }
        ?>
</body>

</html>