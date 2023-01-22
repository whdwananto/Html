<?php

$hostname = "localhost";
$userDataBase = "root";
$passwordUser = "";
$databaseName = "pemrograman_web";

$koneksi = mysqli_connect($hostname, $userDataBase, $passwordUser, $databaseName) or die(mysqli_error());

