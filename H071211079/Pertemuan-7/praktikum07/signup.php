<?php

    require 'connection.php';

    if(isset($_SESSION["id"])) {
        header("Location: index.php");
    }

    $signup = new Signup();

    if(isset($_POST["submit"])) {
        $result = $signup->registration($_POST["nama"], $_POST["user_name"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);
    
        if($result == 1) {
            header("Location: login.php");
        }
        elseif($result == 10) {
            echo"<script> alert('Username dan email sudah ada'); </script>";
        }
        elseif($result == 100) {
            echo"<script> alert('Password tidak cocok'); </script>";
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
     body {
        background-color: #FFFFF0;
    }

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
        background-color: #B0C4DE;
        margin: auto;
        width: 300px;
        padding: 20px;
        margin-top: 15px;
        justify-content: center;
        border-radius: 10px;
    }
</style>

<body>
<div id="box">
        <form method="post" action="">
            <center><div style="font-size: 30px; margin : 10px; text-decoration: underline; font-family: 'DM Serif Display', serif;">Sign Up</div><br></center>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Nama</label>
            <input id="text" type="nama" name="nama">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Username</label>
            <input id="text" type="user_name" name="user_name">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Email</label>
            <input id="text" type="email" name="email">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Password</label>
            <input id="text" type="password" name="password">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Confirm Password</label>
            <input id="text" type="password" name="confirmpassword">
            </div><br>

            <center><input id="button" type="submit" name="submit" value="Create"><br><br>

            <div style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Sudah punya akun? <a href="login.php">Login</a></div><br></center>
        </form>
    </div>
</body>
</html>