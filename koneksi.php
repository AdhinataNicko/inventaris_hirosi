<?php
$host = 'localhost';
$db   = 'inventaris_hirosi';
$user = 'root';
$pswd = '';

$mysqli = mysqli_connect($host, $user, $pswd, $db);

if (!$mysqli) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
