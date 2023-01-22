<?php

include 'koneksi.php';

session_start();
if (!isset($_SESSION['id_u'])) {
    header("index.php");
}

$id_user = $_SESSION['id_u'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$note = $_POST['note'];

$query = mysqli_query($conn, "INSERT INTO noted VALUES('','$judul','$tanggal','$note','$id_user')");

if ($query) {
    echo '<script type="text/javascript">
            alert("Catatan telah ditambahkan")
            window.location="dashboard.php"
            </script>';
}
