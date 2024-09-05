<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<link id="pagestyle" href="<?= base_url('assets/css/') ?>datatable.css" rel="stylesheet" />
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0"><?= $title; ?></h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="proposal" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th>Nama Proposal</th>
                                <th>Tanggal</th>
                                <th style="width: 10%;">Ajukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($a = 1; $a <= 20; $a++) { ?>
                                <tr>
                                    <td class="text-center"><?= $a ?></td>
                                    <td>Pengadaan alat</td>
                                    <td>12-September-2024</td>
                                    <td><button class="btn btn-success" style="padding: 0px 7px 0px 7px;"><i class="fas fa-check"></i></button></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-left">No</th>
                                <th>Nama Proposal</th>
                                <th>Tanggal</th>
                                <th>Ajukan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/footer'); ?>
</div>
<?= $this->endSection(); ?>