<?php

include "koneksi.php";

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

if ($nilai_akhir >= 80) {
    $grade = "A";
} elseif ($nilai_akhir >= 70) {
    $grade = "B";
} elseif ($nilai_akhir >= 60) {
    $grade = "C";
} elseif ($nilai_akhir >= 50) {
    $grade = "D";
} else {
    $grade = "E";
}

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (npm, nama_mahasiswa, absen, tugas, uts, uas, akhir, grade ) VALUE ('$npm', '$nama',  '$absen',  '$tugas',  '$uts',  '$uas', '$nilai_akhir','$grade')") or die(mysqli_error($koneksi));

if ($proses) {
    echo "
    <script>
        alert('Data Berhasil');
        window.location.href='nilai_mahasiswa.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal');
        window.location.href='nilai_mahasiswa.php';
    </script>";
}
