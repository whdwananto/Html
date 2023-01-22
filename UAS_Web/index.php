<?php

session_start();
if (isset($_SESSION['id_u'])) {
    header("dashboard.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <h1 class="title">Login</h1>
        <form action="loginp.php" method="post">
            <label for="">Username</label>
            <input type="text" class="form" name="nama" autocomplete="off" required>
            <label for="">Password</label>
            <input type="password" class="form" name="pass" required>
            <table>
                <tr>
                    <h4>Tidak punya akun? klik disini <a href="registrasi.php">Registrasi</a></h4>
                    <th><input type="submit" class="input-btn green" value="login"></th>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>