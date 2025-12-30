<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $jumlah      = $_POST['jumlah'];
    $kondisi     = $_POST['kondisi'];
    $lokasi      = $_POST['lokasi'];

    $query = "INSERT INTO inventaris_barang 
              (nama_barang, jumlah, kondisi, lokasi)
              VALUES ('$nama_barang', '$jumlah', '$kondisi', '$lokasi')";

    if (mysqli_query($mysqli, $query)) {
    echo "<script>
            alert('Data inventaris berhasil ditambahkan');
            window.location.href = 'index.php?page=inventaris';
          </script>";
    exit;
    }
}
?>

<div class="content-wrapper p-4">
  <h3 class="fw-bold mb-3">Tambah Inventaris Barang</h3>

  <div class="card shadow-sm">
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Jumlah</label>
          <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Kondisi</label>
          <select name="kondisi" class="form-select" required>
            <option value="">-- Pilih Kondisi --</option>
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
            <option value="Perlu Perbaikan">Perlu Perbaikan</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Lokasi</label>
          <input type="text" name="lokasi" class="form-control" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">
          <i class="bi bi-save"></i> Simpan
        </button>
        <a href="index.php?page=inventaris" class="btn btn-secondary">
          Kembali
        </a>
      </form>
    </div>
  </div>
</div>
