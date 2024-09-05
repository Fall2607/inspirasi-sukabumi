<aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <div style="display: flex;">
                <img src="<?= base_url('assets/logo/') ?>logo.png" style="margin-top:6.5px" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-2 font-weight-bold">Inspirasi<br>Sukabumi</span>
            </div>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'dash') ? 'active' : '' ?>" href="<?= base_url('/dashboard') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menus</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'inovasi') ? 'active' : '' ?>" href="<?= base_url('/inovasi-daerah') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bulb-61 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inovasi Daerah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'proposal') ? 'active' : '' ?>" href="<?= base_url('/list/proposal') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-folder-17 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Proposal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'penerapan') ? 'active' : '' ?>" href="<?= base_url('/list/penerapan') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Penerapan</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'prof') ? 'active' : '' ?>" href="<?= base_url('/account/profile') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($mark == 'user') ? 'active' : '' ?>" href="<?= base_url('/list/user') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List User</span>
                </a>
            </li>
        </ul>
    </div>
</aside>