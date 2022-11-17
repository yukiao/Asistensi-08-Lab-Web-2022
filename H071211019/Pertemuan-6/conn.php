<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "data_akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);

function connect($q1){
    global $koneksi;
    return mysqli_query($koneksi, $q1);
    
}

?>