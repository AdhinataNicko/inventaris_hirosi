<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($mysqli, "SELECT * FROM inventaris_barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $nama_barang = $_POST['nama_barang'];
    $jumlah      = $_POST['jumlah'];
    $kondisi     = $_POST['kondisi'];
    $lokasi      = $_POST['lokasi'];

    $query = "UPDATE inventaris_barang SET
              nama_barang='$nama_barang',
              jumlah='$jumlah',
              kondisi='$kondisi',
              lokasi='$lokasi'
              WHERE id='$id'";

    if (mysqli_query($mysqli, $query)) {
    echo "<script>
            alert('Data inventaris berhasil di edit');
            window.location.href = 'index.php?page=inventaris';
          </script>";
    exit;
    }
}
?>

<div class="content-wrapper p-4">
  <h3 class="fw-bold mb-3">Edit Inventaris Barang</h3>

  <div class="card shadow-sm">
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control"
                 value="<?= $row['nama_barang']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Jumlah</label>
          <input type="number" name="jumlah" class="form-control"
                 value="<?= $row['jumlah']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Kondisi</label>
          <select name="kondisi" class="form-select" required>
            <option value="Baik" <?= ($row['kondisi']=='Baik')?'selected':''; ?>>Baik</option>
            <option value="Rusak" <?= ($row['kondisi']=='Rusak')?'selected':''; ?>>Rusak</option>
            <option value="Perlu Perbaikan" <?= ($row['kondisi']=='Perlu Perbaikan')?'selected':''; ?>>Perlu Perbaikan</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Lokasi</label>
          <input type="text" name="lokasi" class="form-control"
                 value="<?= $row['lokasi']; ?>" required>
        </div>

        <button type="submit" name="update" class="btn btn-warning">
          <i class="bi bi-pencil-square"></i> Update
        </button>
        <a href="index.php?page=inventaris" class="btn btn-secondary">
          Kembali
        </a>
      </form>
    </div>
  </div>
</div>
