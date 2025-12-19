<?php
$query = mysqli_query($mysqli, "SELECT COUNT(*) AS total_barang FROM inventaris_barang");
$data  = mysqli_fetch_assoc($query);
$total_barang = $data['total_barang'];
?>

<div class="content-wrapper p-4">
  <!-- Header -->
  <section class="content-header mb-4">
    <h3 class="fw-bold mb-1">Dashboard Inventaris</h3>
    <p class="text-muted">
      Selamat datang di <strong>Sistem Inventaris HIROSI</strong>
    </p>
  </section>

  <!-- Informasi Singkat -->
  <section class="content mb-4">
    <div class="alert alert-primary d-flex align-items-center shadow-sm" role="alert">
      <i class="bi bi-info-circle-fill fs-4 me-3"></i>
      <div>
        Sistem ini digunakan untuk mengelola data inventaris barang milik
        <strong>HIMA Prodi Sistem Informasi</strong> agar pencatatan lebih tertata,
        mudah diakses, dan terdokumentasi dengan baik.
      </div>
    </div>
  </section>

  <!-- Dashboard Cards -->
  <section class="content">
    <div class="row g-4">

      <!-- Inventaris Barang -->
      <div class="col-xl-4 col-md-6">
        <div class="card border-primary h-100 shadow-sm text-center">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-box-seam fs-1 text-primary mb-3"></i>
            <h5 class="fw-semibold">Inventaris Barang</h5>
            <p class="text-muted">
              Kelola data barang inventaris HIMA Prodi Sistem Informasi
            </p>
            <a href="index.php?page=inventaris" class="btn btn-primary mt-auto">
              Kelola Inventaris
            </a>
          </div>
        </div>
      </div>

      <!-- Kondisi Barang -->
      <div class="col-xl-4 col-md-6">
        <div class="card border-success h-100 shadow-sm text-center">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-clipboard-check fs-1 text-success mb-3"></i>
            <h5 class="fw-semibold">Kondisi Barang</h5>
            <p class="text-muted">
              Monitoring kondisi barang (Baik, Rusak, Perlu Perbaikan)
            </p>
            <a href="index.php?page=inventaris" class="btn btn-success mt-auto">
              Lihat Kondisi
            </a>
          </div>
        </div>
      </div>

      <!-- Lokasi Penyimpanan -->
      <div class="col-xl-4 col-md-12">
        <div class="card border-warning h-100 shadow-sm text-center">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-geo-alt-fill fs-1 text-warning mb-3"></i>
            <h5 class="fw-semibold">Lokasi Penyimpanan</h5>
            <p class="text-muted">
              Informasi lokasi penyimpanan barang inventaris
            </p>
            <a href="index.php?page=inventaris" class="btn btn-warning text-dark mt-auto">
              Lihat Lokasi
            </a>
          </div>
        </div>
      </div>

      <!-- Panduan Sistem -->
      <div class="col-xl-6 col-md-6">
        <div class="card border-info h-100 shadow-sm">
          <div class="card-body">
            <h5 class="fw-semibold">
              <i class="bi bi-journal-text me-2"></i>Panduan Penggunaan
            </h5>
            <ul class="text-muted mt-3 mb-0">
              <li>Gunakan menu <strong>Inventaris</strong> untuk tambah & edit data</li>
              <li>Pastikan kondisi barang diisi dengan benar</li>
              <li>Lokasi penyimpanan harus jelas dan konsisten</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Statistik (Dummy) -->
      <div class="col-xl-6 col-md-6">
        <div class="card border-secondary h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="fw-semibold mb-3">
              <i class="bi bi-bar-chart-fill me-2"></i>Ringkasan Data
            </h5>
            <p class="text-muted mb-1">Total Barang</p>
            <h2 class="fw-bold text-secondary">
              <?= $total_barang ?>
            </h2>
            <small class="text-muted">(Akan terisi otomatis dari database)</small>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>