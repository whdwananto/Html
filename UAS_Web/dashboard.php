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
    <title>Dashboard</title>

</head>

<body>
    <h1 class="mg-lf-20">NOTEPAD</h1>
    <div class="container">
        <button class="btn red mg-lf-20"><a href="logout.php">Keluar</a></button>
        <div class="wrapper-grid">
            <?php
            $id_user = $_SESSION['id_u'];
            include 'koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM noted WHERE id_user = '$id_user'");

            while ($result = mysqli_fetch_array($data)) { ?>

                <div class="box">
                    <div class="text-title">
                        <h4>Note : <?php echo $result['judul'] ?></h4>
                    </div>
                    <div class="text-title">
                        <h4>Tanggal : <?php echo $result['tanggal'] ?></h4>
                    </div>
                    <div class="thenote">
                        <p>
                            <?php echo $result['note']; ?>
                        </p>
                    </div>
                    <p>
                        ID : <?php echo $result['id']; ?>
                    </p>
                    <button class="btn green">
                        <a href="halbaca.php?id=<?php echo $result['id'] ?> ">Lihat</a>
                    </button>
                    <button class="btn blue">
                        <a href="editnote.php?id=<?php echo $result['id'] ?> ">Edit</a>
                    </button>
                    <button class="btn red">
                        <a href="delete.php?id=<?php echo $result['id'] ?> ">Hapus</a>
                    </button>
                </div>



            <?php
            }
            ?>

            <div class="box add-box">
                <div class="add-txt">
                    <h4>Tambahkan Catatan</h4>
                    <button class="btn green">
                        <a href="tambahnote.php">Tambahkan</a>
                    </button>
                </div>
            </div>

        </div>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");

        while ($db = mysqli_fetch_array($data)) {
            echo $db['username'];
        }
        ?>
    </div>
</body>

</html>