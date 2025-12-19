<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="index.php?page=home" class="brand-link">
            <img src="./assets/img/hirosi.png" alt="Logo Hirosi" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Inventaris Hirosi</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation">

                <!-- ====== MENU HOME ====== -->
                <li class="nav-item">
                    <a href="index.php?page=home"
                       class="nav-link <?= ($page == 'home' || $page == '') ? 'active bg-secondary text-white' : '' ?>">
                        <i class="nav-icon bi bi-house-door"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- ====== MENU INVENTARIS ====== -->
                <li class="nav-item mt-2">
                    <a href="index.php?page=inventaris"
                       class="nav-link <?= (str_contains($page, 'inventaris')) ? 'active bg-secondary text-white' : '' ?>">
                        <i class="nav-icon bi bi-box-seam"></i>
                        <p>Inventaris Barang</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>