<?php

class Connection
{

    public $dbhost = "localhost";
    public $dbuser = "root";
    public $dbpass = "";
    public $dbname = "akademik";
    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    }
}

class Signup extends Connection
{
    public function registration($nama, $user_name, $email, $password, $confirmpassword)
    {
        $duplicate = mysqli_query($this->con, "select * from oop_users where user_name = '$user_name' or email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
        } else {
            if ($password == $confirmpassword) {
                $query = "insert into oop_users (nama, user_name, email, password) values('$nama', '$user_name', '$email', '$password')";
                mysqli_query($this->con, $query);
                return 1;
            } else {
                return 100;
            }
        }
    }
}

class Login extends Connection
{
    public $id; 
    public function login($usernameemail, $password)
    {
        $simpan = "select * from oop_users where user_name = '$usernameemail' or email = '$usernameemail'";
        $result = mysqli_query($this->con, $simpan);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["password"]) {
                $this->id = $row["id"];
                return 1;
            } else {
                return 10;
            }
        } else {
            return 100;
        }
    }

    public function idUser()
    {
        return $this->id;
    }
}

class User extends Connection
{
    public function selectUserById($id)
    {
        $result = mysqli_query($this->con, "select * from oop_users where id = $id");
        return mysqli_fetch_assoc($result);
    }
}
session_start();

