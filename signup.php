<?php
session_start();

 include("connection.php");
 include("functions.php");

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
     $user_name = $_POST['user_name'];
     $password = $_POST['password'];

     if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
     {
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) value ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;

     }else
     {
         echo "Please enter some valid information!";

     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="heading">Signup</h1>
    <div class="container">
        <div class="box">
            <form method="post">
                <label class="label">Username</label><br>
                <input type="text" name="user_name" class="inputfield"><br><br>
                <label class="label">Email</label><br>
                <input type="email" name="email" class="inputfield"><br><br>
                <label class="label">Password</label><br>
                <input type="password" name="password" class="inputfield"><br><br>
                <input type="submit" value="Signup" class="btn"><br><br>
                <span>Already have an account </span><a href="login.php">Login</a>
            </form>
        </div>
    </div>
</body>
</html>