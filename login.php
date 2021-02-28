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
   
       $query = "select * from users where user_name = '$user_name' limit 1";
       $result = mysqli_query($con, $query);

       if($result)
       {
        if($result  && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;

            }

        }
       }
       echo "Entered Username or Password is incorrect";

    }else
    {
        echo "Entered Username or Password is incorrect";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="heading">Login</h1>
    <div class="container">
    <div class="box">
        <form method="post">
            <label class="label">Username</label><br>
            <input type="text" name="user_name" class="inputfield"><br><br>
            <label class="label">Password</label><br>
            <input type="password" name="password" class="inputfield"><br><br>
            <input type="submit" value="Login" class="btn"><br><br>
            <span>Don't have an account? </span><a href="signup.php">Signup</a>
        </form>
    </div>
    </div>
</body>
</html>