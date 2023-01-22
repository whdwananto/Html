<?php 
session_start();
include 'koneksi.php';
$id_user = $_SESSION['id_u'];
$idpage = $_POST['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$note = $_POST['note'];

$data = mysqli_query($conn, "UPDATE `noted` SET `id`='$idpage',`judul`='$judul',`tanggal`='$tanggal',`note`='$note',`id_user`='$id_user' WHERE id_user = '$id_user' AND id = '$idpage'");

if($data){
    echo '<script >
            window.location="dashboard.php"
            </script>';
}else {
    echo '<script type="text/javascript">
            alert("Edit Gagal")
            window.location="dashboard.php"
            </script>';
}

