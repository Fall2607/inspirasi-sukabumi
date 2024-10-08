<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="card shadow-lg mx-4 my-4">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="<?= base_url('assets/img/') ?>team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        <?= $title; ?>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Form
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center" id="proposal-tab" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="ni ni-app"></i>
                                <span class="ms-2">Proposal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center" id="penerapan-tab" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-settings-gear-65"></i>
                                <span class="ms-2">Penerapan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div id="content-proposal" class="fade-in-up">
        <?= $this->include('site/v_proposal'); ?>
    </div>
    <div id="content-penerapan" class="hidden">
        <?= $this->include('site/v_pendaftaran'); ?>
    </div>
    <?= $this->include('templates/footer'); ?>
</div>

<script src="<?= base_url('assets/js/inovasi.js') ?>"></script>

<?= $this->endSection(); ?>