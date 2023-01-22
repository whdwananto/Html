<?php 
session_start();
$id_user = $_SESSION['id_u'];
$idpage = $_GET['id'];
include 'koneksi.php';

$data = mysqli_query($conn, "DELETE FROM noted WHERE id_user = '$id_user' AND id = '$idpage'");

if($data){
    echo '<script type="text/javascript">
            alert("Berhasil dihapus")
            window.location="dashboard.php"
            </script>';
}else{
    echo '<script type="text/javascript">
            alert("Gagal dihapus")
            window.location="dashboard.php"
            </script>';
}

?>