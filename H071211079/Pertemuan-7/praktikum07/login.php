<?php

require 'connection.php';


if(isset($_SESSION["id"])) {
    header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])) {
    $result = $login->login($_POST["user_name"], $_POST["password"]);
    if($result == 1) {
        // echo"<script> alert('Email atau Password salah'); </script>";
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login->idUser();
        header("Location: index.php");
    }
    elseif ($result == 10){
        echo"<script> alert('Email atau Password salah'); </script>";
    }
    elseif($result == 100) {
        echo"<script> alert('Anda belum registrasi'); </script>";
    }
// }else{
//     echo "<script>console.log('heelo')</script>";
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
    <title>Login</title>
</head>

<style>
    body {
        background-color: #FFFFF0;
    }
    
    #text_1{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        font-family: 'Sarabun', sans-serif;
        width: 100%;
    }

    #text_2{
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
        margin-top: 100px;
        justify-content: center;
        border-radius: 10px;
    }
</style>

<body>
    <div id="box">
        <form method="post" action="">
            <center><div style="font-size: 30px; margin : 10px; text-decoration: underline; font-family: 'DM Serif Display', serif;">Log In</div><br></center>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Username</label>
            <input id="text_1" type="text" name="user_name">
            </div><br>

            <div>
                <label style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Password</label>
            <input id="text_2" type="password" name="password">
            </div><br>

            <center><input id="button" type="submit" name="submit" value="Login"><br><br>

            <div style="font-family: 'Sarabun', sans-serif; font-size: 14px;">Belum punya akun? <a href="signup.php">Sign Up</a></div><br></center>
        </form>
    </div>
</body>
</html>