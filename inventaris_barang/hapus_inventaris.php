<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM inventaris_barang WHERE id='$id'";

if (mysqli_query($mysqli, $query)) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php?page=inventaris';
          </script>";
} else {
    echo "Gagal menghapus data";
}
