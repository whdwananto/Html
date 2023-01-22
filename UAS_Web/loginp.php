<?php

session_start();
include 'koneksi.php';

$username = $_POST['nama'];
$password = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if(mysqli_num_rows($result) === 1 ){
    $row = mysqli_fetch_array($result);
    if($password !== $row['password']){
        echo '<script type="text/javascript">
            alert("Password Salah")
            window.location="index.php"
            </script>';

        return false;
    }

    if($password == $row['password']){
        $_SESSION['id_u'] = $row['id_user'];
    }

    echo '<script type="text/javascript">
            alert("Login Berhasil")
            window.location="dashboard.php"
            </script>';
}else{
    echo '<script type="text/javascript">
            alert("Nama Tidak Ditemukan ")
            window.location="index.php"
            </script>';
}

?>