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
    <title>Edit Note</title>
</head>

<body>
    <?php
    $id_user = $_SESSION['id_u'];
    $idpage = $_GET['id'];
    include 'koneksi.php';

    $data = mysqli_query($conn, "SELECT * FROM noted WHERE id_user = '$id_user' AND id = '$idpage'");

    while ($result = mysqli_fetch_array($data)) {
    ?>
        <div class="wrapper">
            <h1 class="title">Edit Note</h1>
            <form action="edit.php" method="post">

                <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                <label for="">Judul</label>
                <input type="text" class="form" value="<?php echo $result['judul'] ?>"  name="judul" autocomplete="off" required>
                <label for="">tanggal</label>
                <input type="date" class="form" value="<?php echo $result['tanggal'] ?>"  name="tanggal" autocomplete="off" required>
                <label for="">Note</label>
                <textarea name="note" class="note" required><?php echo $result['note'] ?></textarea>
                <table>
                    <tr>
                        <th><button class="red btn"><a href="dashboard.php">Kembali</a></button></th>
                        <th><input type="submit" class="blue input-btn" value="Edit"></th>
                    </tr>
                </table>
            </form>
        </div>
    <?php
    }
    ?>
</body>

</html>