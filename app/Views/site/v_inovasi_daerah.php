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
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="ni ni-app"></i>
                                <span class="ms-2">Proposal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-settings-gear-65"></i>
                                <span class="ms-2">Pendaftaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="align-items-center">
                        <h4 class="mb-0">Formulir Proposal Inovasi Daerah</h4>
                        <p>Formulir ini diisi untuk pengusulan inisiasi inovasi daerah (inovasi daerah baru)</p>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-sm">Bagian 1 - 4</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Email</label>
                                <input class="form-control" type="email" placeholder="Alamat Email Valid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Jenis Inovator</label>
                                <select class="form-select">
                                    <option hidden>Pilih Jenis Inovator</option>
                                    <option value="">ASN</option>
                                    <option value="">Perangkat Daerah / Kecamatan / UPTD / UPTB / BLUD</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Nama Inovator</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Nama Lengkap Inovator" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">NIP Inovator</label>
                                <input class="form-control" type="text" placeholder="Tuliskan NIP Inovator">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Jabatan Inovator</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Jabatan Inovator">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Nomor WhatsApp Inovator yang dapat dihubungi</label>
                                <input class="form-control" type="text" placeholder="Tuliskan No Wa Inovator">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Nama Perangkat Daerah / Kecamatan / UPTD / UPTB / BLUD</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Nama perangkat dearah Inovator">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Nama Inovasi Daerah</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Nama Inovasi Daerah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Jenis Inovasi Daerah</label>
                                <select class="form-select">
                                    <option hidden>Pilih Bentuk Inovasi</option>
                                    <option value="">Digital</option>
                                    <option value="">Non Digital</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Bentuk Inovasi Daerah</label>
                                <select class="form-select">
                                    <option hidden>Pilih Jenis Inovasi</option>
                                    <option value="">Inovasi Tata Kelola Pemerintahan</option>
                                    <option value="">Inovasi Pelayanan Publik</option>
                                    <option value="">Inovasi Daerah lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Tujuan Inovasi Daerah</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Tujuan Inovasi Daerah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Manfaat Inovasi Daerah</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Manfaat Inovasi Daerah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Hasil Inovasi Daerah</label>
                                <input class="form-control" type="text" placeholder="Tuliskan Hasil Inovasi Daerah">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-sm">Bagian 2 - 4</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Rancang bangun dan pokok perubahan yang akan dilakukan</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="Gabungan dari seluruh isian dalam rancang bangun dan pokok perubahan yang akan dilakukan (dasar hukum, permasalahan, isu strategis, metode pembaharuan, keunggulan/kebaharuan, cara kerja inovasi) harus lebih dari 300 kata"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Dasar Hukum</label>
                                <textarea style="height: 75px;" class="form-control" type="email" placeholder="(tuliskan seluruh peraturan perundang-undangan yang menjadi landasan dari inovasi daerah yang diinisiasi)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Permasalahan</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(Uraian tentang situasi atau kondisi yang dianggap tidak ideal, atau berupa gap antara kondisi yang diharapkan dengan kondisi saat ini, sehingga dalam penyelesaiannya memerlukan terobosan berupa inovasi daerah yang diinisiasi)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Isu Strategis</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(Uraian tentang topik atau masalah yang memiliki dampak signifikan terhadap tujuan atau misi organisasi, dan memerlukan perhatian khusus berupa inovasi yang diinisiasi. Isu strategis dapat dianalisis dari mulai isu Global, Nasional, dan Lokal yang berkenaan dengan lingkungan organisasi dan berdampak terhadap kemampuan organisasi dalam mencapai tujuan)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Metode Pembaharuan</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(Uraian tentang kondisi sebelum penerapan inovasi dan kondisi yang diharapkan akan terjadi setelah inovasi diterapkan, serta pengaruh yang dirasakan kemanfaatannya bagi pengguna inovasi)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Keunggulan/Kebaharuan</label>
                                <textarea style="height: 120px;" class="form-control" type="email" placeholder="(Uraian tentang aspek-aspek unik yang membuat inovasi yang diinisiasi berbeda atau lebih baik dari pada solusi yang sudah ada sebelumnya. Keunggulan/kebaharuan tersebut dapat berupa peningkatan kinerja seperti percepatan pencapaian hasil; peningkatan kualitas penyelesaian masalah seperti penyediaan solusi yang lebih efektif dan efisien; atau adanya solusi baru atau pendekatan baru yang kreatif dan original dalam penyelesaian masalah)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Cara Kerja Inovasi</label>
                                <textarea style="height: 75px;" class="form-control" type="email" placeholder="(Uraian singkat tentang mekanisme inovasi/ tahapan kerja inovasi sesuai dengan Standard Operating Procedure)"></textarea>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="" class="form-control-label">Upload Gambar Diagram Alir Cara Kerja Inovasi sesuai Standard Operating Procedure (SOP)</label>
                            <div class="form-group">
                                <input type="file" class="form-control" id="inputGroupFile02">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-sm">Bagian 3 - 4</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-control-label">Tim Pengelola Inovasi Daerah</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(diisi dengan nama-nama pegawai yang akan menjadi tim pengelola inovasi, biasanya bersifat internal, contohnya tim di Bappelitbangda yang menjadi admin aplikasi SIPD)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Tim Pelaksana Inovasi Daerah</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(diisi dengan nama-nama pegawai/unsur instansi yang akan melaksanakan inovasi daerah, contohnya tim operator SIPD di seluruh PD dan Kecamatan dalam penggunaan aplikasi SIPD)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Keterlibatan Aktor Inovasi</label>
                                <textarea style="height: 100px;" class="form-control" type="email" placeholder="(diisi dengan unsur Stakeholder Pentahelix yang akan diikut sertakan dalam pelaksanaan inovasi daerah)"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-sm">Bagian 4 - 4</p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-control-label">Lampiran Surat Izin Tertulis dari Kepala Instansi</label>
                            <div class="form-group">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-control-label">Upload file surat izin tertulis</label>
                            <div class="form-group">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/footer'); ?>
</div>
<?= $this->endSection(); ?>