<?php

session_start();
if (!isset($_SESSION['id_u'])) {
    header("index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Read</title>
</head>

<body>
    <?php
    $id_user = $_SESSION['id_u'];
    $idpage = $_GET['id'];
    include 'koneksi.php';

    $data = mysqli_query($conn, "SELECT * FROM noted WHERE id_user = '$id_user' AND id = '$idpage'");

    while ($result = mysqli_fetch_array($data)) { ?>
        <div class="box-read">
             <div class="text-title">
                <h4>Note : <?php echo $result['judul'] ?></h4>
            </div>
            <div class="text-title">
                <h4>Tanggal : <?php echo $result['tanggal'] ?></h4>
            </div>
            <div class="thenote">
            <p><?php echo $result['note']; ?></p>
            </div>
            <p>
                ID  : <?php echo $result['id']; ?>
            </p>
            <button class="green btn">
                <a href="dashboard.php">Kembali</a>
            </button>
        </div>

    <?php
    }
    ?>
</body>

</html>