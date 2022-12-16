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

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);


    // Cek unique username
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username");

    if(mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username telah digunakan');
            </script>
        ";
        return false;
    }

    // Cek konfirmasi password
    if($password !== $password2) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai');
            </script>
        ";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // Tambah user baru
    $query = "INSERT INTO users VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>
