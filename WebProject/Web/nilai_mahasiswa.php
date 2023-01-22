<?php
include "tampil_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nilai Mahasiswa</title>
    <link href="bootstrap2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap2/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap2/assets/styles.css" rel="stylesheet" media="screen">
    <script src="bootstrap2/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="ananto">
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Nilai Mahasiswa</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form action="penilaian.php" method="POST">
                                <fieldset>
                                    <legend>Input Nilai Mahasiswa</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="NPM">MASUKAN NPM</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="NPM" type="text" name="npm" value="">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="NPM">MASUKAN NAMA</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="NPM" type="text" name="nama" value="">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="NPM">MASUKAN ABSEN</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="NPM" type="text" name="absen" value="">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="NPM">MASUKAN NILAI TUGAS</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="NPM" type="text" name="tugas" value="">
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="NPM">MASUKAN NILAI UTS</label>
                                            <div class="controls">
                                                <input class="input-xlarge focused" id="NPM" type="text" name="uts" value="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="NPM">MASUKAN NILAI UAS</label>
                                            <div class="controls">
                                                <input class="input-xlarge focused" id="NPM" type="text" name="uas" value="">
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Proses</button>
                                            <button type="reset" class="btn">Cancel</button>
                                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="block">
                    <table class="block" width="100%" cellspacing="1" align="center" cellpadding="4" border="1px">
                        <tr class="text-center" bgcolor="grey">
                            <th rowspan="2">NPM</th>
                            <th rowspan="2">Nama <br>Mahasiswa</th>
                            <th colspan="4">Nilai</th>
                            <th rowspan="2">Nilai <br>Total</th>
                            <th rowspan="2">Grade</th>
                        </tr>
                        <tr class="text-center" bgcolor="grey">
                            <th>Absensi</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                        </tr>

                        <?php
                        while ($data = mysqli_fetch_assoc($proses)) {
                        ?>
                            <tr class="text-center">
                                <td><?php echo $data['npm'] ?></td>
                                <td> <?php echo $data['nama_mahasiswa'] ?></td>
                                <td><?php echo $data['absen'] ?></td>
                                <td><?php echo $data['tugas'] ?></td>
                                <td><?php echo $data['uts'] ?></td>
                                <td><?php echo $data['uas'] ?></td>
                                <td><?php echo $data['akhir'] ?></td>
                                <td><?php echo $data['grade'] ?></td>
                            </tr>
                        <?php
                        };
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>