<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!-- START CONTENT -->
<div class="mt-5">
    <div class="">
        <div class="row">
            <div class="col-md-7 col-12 d-flex align-items-stretch bg-transparent">
                <div class="card bg-transparent">
                    <div id="carousel-captions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $active = true; ?>
                            <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
                            <?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
                            <?php if(is_file($file_gambar)) : ?>
                            <div class="carousel-item <?php echo ($active == true)?"active":"" ?>"
                                style="border-radius: 10px !important;"
                                onclick="location.href='<?='artikel/'.buat_slug($gambar); ?>'">
                                <!-- <img src="" alt=""> -->
                                <div class="fill"
                                    style="border-radius: 10px !important; background-image:url('<?php echo base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>');">
                                </div>
                                <div class="carousel-item-background d-none d-md-block "
                                    style="border-radius: 10px !important;"></div>
                                <div class="carousel-caption  next d-none d-md-block ">
                                    <h3>
                                        <?= $gambar['judul'] ?> </h3>
                                </div>
                            </div>
                            <?php $active = false; ?>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-5 col-12" id="statistik">
                <div class="row">
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Jumlah Laki-laki">
                        <div class="card p-2 bg-info img-card box-info-shadow">
                            <div class="p-2  card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font" data-name="laki-laki"></h3>
                                        <p class="text-white mb-0">Laki-Laki</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-male text-white fs-30 mr-2 mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Jumlah Perempuan">
                        <div class="card p-2 bg-secondary img-card box-secondary-shadow">
                            <div class="p-2  card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font" data-name="perempuan"></h3>
                                        <p class="text-white mb-0">Perempuan</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-female text-white fs-30 mr-2 mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Jumlah Penduduk">
                        <div class="card p-2 bg-primary img-card box-primary-shadow">
                            <div class="p-2  card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font" data-name="jmlpenduduk"></h3>
                                        <p class="text-white mb-0">Jumlah Penduduk</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-users text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Jumlah Kertu Keluarga">
                        <div class="card p-2  bg-success img-card box-success-shadow">
                            <div class="card-body p-2">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font" data-name="kk">329,212</h3>
                                        <p class="text-white mb-0">Kartu Keluarga</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-user text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Admin Desa">
                        <a href="<?= site_url('siteman') ?>">
                            <div class="card p-2  bg-success img-card box-success-shadow">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h3 class="mb-0 number-font">LAYANAN ADMIN DESA</h3>
                                        </div>
                                        <div class="ml-auto d-lg-block d-none"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Layanan Mandiri">
                        <a href="<?= site_url('layanan-mandiri') ?>">
                            <div class="card p-2  bg-primary img-card box-primary-shadow">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h3 class="mb-0 number-font">LAYANAN MANDIRI</h3>
                                        </div>
                                        <div class="ml-auto d-lg-block d-none"> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (config_item('counter_box') == 'aktifkan') :?>
    <div class="d-flex justify-content-center flex-wrap">
        <a class="btn btn-blue link-small text-sm-center" href="#" target="_blank" data-toggle="tooltip"
            data-placement="top" title="Surat Tercetak">
            <img src="<?= base_url('assets/mytheme/images/icon/letter.svg'); ?>" alt="">
            <br>
            <small style="color: black; font-size: 11px;" data-name="surattercetak"></small>
        </a>
        <a class="btn btn-blue link-small text-sm-center" href="#" target="_blank" data-toggle="tooltip"
            data-placement="top" title="Verifikasi Layanan Mandiri">
            <img src="<?= base_url('assets/mytheme/images/icon/registration.svg'); ?>" alt="">
            <br>
            <small style="color: black;" data-name="pendaftaran"></small>
        </a>
        <a class="btn btn-blue link-small text-sm-center" href="#" target="_blank" data-toggle="tooltip"
            data-placement="top" title="Data Ibu Hamil">
            <img src="<?= base_url('assets/mytheme/images/icon/pregnant.svg'); ?>" alt="">
            <br>
            <small style="color: black;" data-name="ibuhamil"></small>
        </a>
        <a class="btn btn-blue link-small text-sm-center" href="#" target="_blank" data-toggle="tooltip"
            data-placement="top" title="Data Dusun">
            <img src="<?= base_url('assets/mytheme/images/icon/density.svg'); ?>" alt="">
            <br>
            <small style="color: black;" data-name="dusun"></small>
            <a class="btn btn-blue link-small text-sm-center" href="<?= site_url(); ?>buku-tamu" target="_blank"
                data-toggle="tooltip" data-placement="top" title="Rekap Layanan Buku Tamu">
                <img src="<?= base_url('assets/mytheme/images/icon/ebook.svg'); ?>" alt="">
                <br>
                <small style="color: black;" data-name="ebook"></small>
            </a>
            <a class="btn btn-blue link-small text-sm-center" href="<?= site_url(); ?>pengaduan" target="_blank"
                data-toggle="tooltip" data-placement="top" title="Pengaduan/Lapor">
                <img src="<?= base_url('assets/mytheme/images/icon/complaint.svg'); ?>" alt="">
                <br>
                <small style="color: black;"><span style="color: black; font-size: 9px;">LAPOR</span>
                    <p style="color: black;margin-top: -5px; font-size: 9px;">KE DESA</p>
                </small>
            </a>
            <a class="btn btn-blue link-small text-sm-center" href="<?= site_url(); ?>pembangunan" target="_blank"
                data-toggle="tooltip" data-placement="top" title="Dokumentasi Kegiatan Pembangunan">
                <img src="<?= base_url('assets/mytheme/images/icon/trowel.svg'); ?>" alt="">
                <br>
                <small style="color: black;"><span style="color: black; font-size: 9px;">PEMBANGUNAN</span>
                    <p style="color: black;margin-top: -5px; font-size: 9px;">SARANA</p>
                </small>
            </a>
            <a class="btn btn-blue link-small text-sm-center" href="<?= site_url(); ?>lapak" target="_blank"
                data-toggle="tooltip" data-placement="top" title="E-PASAR Desa Untuk Warga">
                <img src="<?= base_url('assets/mytheme/images/icon/market.svg'); ?>" alt="">
                <br>
                <small style="color: black;"><span style="color: black; font-size: 9px;">E-PASAR</span>
                    <p style="color: black;margin-top: -5px; font-size: 9px;">DESA</p>
                </small>
            </a>
    </div>
    <?php else : ?>
    <?php endif ?>
    <div class="card CardPengaduan">
        <div class="card-header bg-success text-white">
            <h3 class="card-title">JAM LAYANAN KANTOR</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
                        class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
                        class="fe fe-maximize"></i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cards ">
                <div class="row mx-2">
                    <?php foreach ($jam_kerja as $value) : ?>
                    <?php if ($value->status) : ?>
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                        title="Jam Operasional Hari <?= $value->nama_hari ?>">

                        <div class="card p-2 bg-success img-card box-success-shadow">
                            <div class="p-2 card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font"><?= $value->nama_hari ?></h3>
                                        <p class="text-white mb-0"><?= $value->jam_masuk ?></p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                        title="Jam Operasional Hari <?= $value->nama_hari ?>,  Tidak Ada Pelayanan">

                        <div class="card p-2  bg-info  img-card box-primary-shadow">
                            <div class="p-2 card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font"><?= $value->nama_hari ?></h3>
                                        <p class="text-white mb-0">

                                            Tidak Ada Pelayanan
                                        </p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (config_item('statistik_surat') == 'aktifkan') :?>
    <!-- ROW-1 CLOSED -->
    <!-- <hr class="message-inner-separator"> -->
    <!-- ROW-2 OPEN -->
    <div class="card CardPengaduan">
        <div class="card-header bg-success text-white">
            <h3 class="card-title">STATISTIK CETAK SURAT DI ANJUNGAN MANDIRI</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
                        class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
                        class="fe fe-maximize"></i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cards ">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable table-hover"
                        id="statistik-list-log-surat">
                        <thead>
                            <tr>
                                <th>Jenis Surat</th>
                                <th>Nama Penduduk</th>
                                <th>Keterangan</th>
                                <th>Tanggal Cetak</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card CardPengaduan">

        <div class="card-header bg-secondary text-white">
            <h3 class="card-title">STATISTIK PERMOHONAN SURAT ONLINE</h3>
            <div class="card-options">
                <a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
                        class="fe fe-chevron-up"></i></a>
                <a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
                        class="fe fe-maximize"></i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cards ">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable table-hover" id="statistik-list-surat">
                        <thead>
                            <tr>
                                <th>Status Permohonan</th>
                                <th>Nomor Antrian</th>
                                <th>Jenis Surat</th>
                                <th>Nama Penduduk</th>
                                <th>Tanggal Permohonan</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-2 CLOSED -->
    <?php else : ?>
    <?php endif ?>
    <!-- APARATUR DESA -->
    <div class="card box-primary-shadow">
        <div class="card-body text-center">
            <h5 class="font-weight-bold ">
                APARATUR DESA
            </h5>
        </div>

        <div class="logo-slider">
            <?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
            <img class="item" data-lazy="<?= $data['foto'] ?>" data-srcset="<?= $data['foto'] ?>" data-sizes="80vw"
                title="<?= $data['nama']?>">
            <?php endforeach; ?>
        </div>
    </div>
    <?php $this->load->view("$folder_themes/partials/artikel_terkini.php"); ?>
</div>
<br>
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <small class="text-muted">Total Permohonan Surat</small>
                <h2 class="number-font" data-name="permohonansurat"></h2>
                <hr style="border-color: #003dff;">
                <div class="row mt-3 pt-3">
                    <div class="col border-right">
                        <p class=" number-font1 mb-0"><span class="dot-label bg-warning"></span>Belum
                            Lengkap</p>
                        <h5 class="mt-2 font-weight-semibold mb-0" data-name="belumlengkap"></h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-success"></span>Sudah
                            diambil</p>
                        <h5 class="mt-2 font-weight-semibold mb-0" data-name="sudahdiambil"></h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-secondary"></span>Sedang diPeriksa</p>
                        <h5 class="mt-2 font-weight-semibold mb-0" data-name="sedangdiperiksa"></h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-primary"></span>Siap Diambil</p>
                        <h5 class="mt-2 font-weight-semibold mb-0" data-name="siapdiambil"></h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-danger"></span>Di Batalkan</p>
                        <h5 class="mt-2 font-weight-semibold mb-0" data-name="dibatalkan"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="card box-primary-shadow">
    <div class="card-body text-center">
        <h5 class="font-weight-bold ">
            SINERGI PROGRAM
        </h5>
    </div>

    <div class="logo-slider">
        <?php foreach($sinergi_program as $key => $program) : $baris[$program['baris']][$program['kolom']] = $program; endforeach; ?>
        <?php foreach($baris as $baris_program) : ?>
        <?php $width = 100/count($baris_program)-count($baris_program)?>
        <?php foreach($baris_program as $key => $program) : ?>
        <!-- Logo size 400x200 -->
        <div class="item"><a href="<?= $program['tautan']?>"><img
                    src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar']?>" alt="" width="80px"
                    title="<?= $program['judul']?>"></a></div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>