<?php
include "koneksi.php";

// Ambil data inventaris
$query = "SELECT * FROM inventaris_barang ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
?>

<div class="content-wrapper p-4">

  <!-- Header -->
  <section class="content-header mb-4">
    <h3 class="fw-bold mb-1">Inventaris Barang</h3>
    <p class="text-muted">
      Daftar barang inventaris HIMA Prodi Sistem Informasi
    </p>
  </section>

  <!-- Card -->
  <div class="card shadow-sm">
  <div class="card-header d-flex align-items-center">
    <h5 class="mb-0">
      <i class="bi bi-box-seam me-2"></i>Data Inventaris
    </h5>

    <a href="index.php?page=tambah_inventaris"
       class="btn btn-primary btn-sm ms-auto shadow-sm">
      <i class="bi bi-plus-circle me-1"></i> Tambah Barang
    </a>
  </div>


    <div class="card-body table-responsive">
      <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-secondary">
          <tr>
            <th width="5%">No</th>
            <th>Nama Barang</th>
            <th width="10%">Jumlah</th>
            <th width="15%">Kondisi</th>
            <th>Lokasi</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($result) > 0): ?>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nama_barang']); ?></td>
                <td><?= $row['jumlah']; ?></td>
                <td>
                  <?php
                  if ($row['kondisi'] == 'Baik') {
                    echo '<span class="badge bg-success">Baik</span>';
                  } elseif ($row['kondisi'] == 'Rusak') {
                    echo '<span class="badge bg-danger">Rusak</span>';
                  } else {
                    echo '<span class="badge bg-warning text-dark">'.$row['kondisi'].'</span>';
                  }
                  ?>
                </td>
                <td><?= htmlspecialchars($row['lokasi']); ?></td>
                <td>
                  <a href="index.php?page=edit_inventaris&id=<?= $row['id']; ?>" 
                     class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="index.php?page=hapus_inventaris&id=<?= $row['id']; ?>" 
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="text-muted">
                Data inventaris belum tersedia
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
