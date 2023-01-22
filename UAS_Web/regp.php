<?php 

include 'koneksi.php';
$name = $_POST['name'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['pass2'];

if($pass1 !== $pass2){
    echo '<script type="text/javascript">
            alert("Pastikan Password yang dibuat sama")
            window.location="registrasi.php"
            </script>';

    return false;
}

$result = mysqli_query($conn, "SELECT username FROM user WHERE username='$name'");

if(mysqli_fetch_assoc($result)){
    echo '<script type="text/javascript">
            alert("Username Sudah Ada")
            window.location="registrasi.php"
            </script>';

    return false;
}

mysqli_query($conn, "INSERT INTO user VALUES('','$name','$pass1')");
echo '<script type="text/javascript">
            alert("Registrasi Berhasil")
            window.location="index.php"
            </script>';


?>