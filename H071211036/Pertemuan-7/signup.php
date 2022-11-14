<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD' ]== "POST") {
        
        //sesuatu terpost
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        } else {
            echo "Please enter some valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<style>
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        font-family: 'Sarabun', sans-serif;
        width: 100%;
    }

    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: #778899;
        border: none;
        border-radius: 5px;
        font-family: 'Sarabun', sans-serif;
        font-size: 14px;
    }

    #box{
        background-color: #ffffff;
        margin: auto;
        width: 300px;
        padding: 20px;
        margin-top: 200px;
        justify-content: center;
        border-style: dashed;
        border-color: #9a9a9a;
        border-width: 1px;
        border-radius: 25px;
    }
</style>

<body style="background-color: #efefef;">
<div id="box">
        <form method="post">
            <center><div style="font-size: 30px; color: #7c8fa0; margin : 10px; text-decoration: underline; font-family: 'DM Serif Display', serif;">Sign Up</div><br></center>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px; color: #65666a;">Username/Email</label>
            <input id="text" type="text" name="user_name">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px; color: #65666a;">Password</label>
            <input id="text" type="password" name="password">
            </div><br>

            <center><input id="button" type="submit" value="Create"><br><br>

            <div style="font-family: 'Sarabun', sans-serif; font-size: 14px; color: #65666a;">Already have an account? <a href="login.php" style="color: #7c8fa0;"><b>Log in</b></a></div><br></center>
        </form>
    </div>
</body>
</html>
