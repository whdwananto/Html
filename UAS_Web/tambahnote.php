<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Note</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Tambah Catatan</h1>
            <form action="add.php" method="post">
                <label for="">Judul Note</label>
                <input type="text" class="form" name="judul" placeholder="Masukkan judul catatan" autocomplete="off" required>
                <label for="">Tanggal</label>
                <input type="date" class="form" name="tanggal" placeholder="Masukkan tanggal " autocomplete="off" required>
                <label for="">Note</label>
                <textarea name="note" class="note" required></textarea>
                <table>
                    <tr>
                        <th><button class="red btn"><a href="dashboard.php">Kembali</a></button></th>
                        <th><input type="submit" class="green input-btn" value="Tambah"></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>