<?php 
// Connect ke database
$host = "localhost";
$user = "root";
$pass = "";
$database = "data_akademik";

// Variabel
$sukses = "";
$err = "";

$conn = mysqli_connect($host, $user, $pass, $database);

// Function query 
function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $fakultas = htmlspecialchars($data['fakultas']);

    $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$alamat', '$fakultas')";

    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data['id'];
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $fakultas = htmlspecialchars($data['fakultas']);

    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', fakultas = '$fakultas' WHERE id = $id";

    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

?>
