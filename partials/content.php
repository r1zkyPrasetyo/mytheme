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
                            <div class="carousel-item <?php echo ($active == true)?"active":"" ?>" style="border-radius: 10px !important;" onclick="location.href='<?='artikel/'.buat_slug($gambar); ?>'">
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
                    <div class="col-md-12 col-12 d-flex align-items-stretch">
                        <div class="card box-primary-shadow">
                            <div class="card-body row ">
                                <h5 class="font-weight-bolder col-12 text-center">Penilaian Pelayanan
                                </h5>

                                <div class=" col-4 text-center m-auto ">
                                    <h1 class="my-0 font-weight-bolder">
                                        4.8 </h1>
                                    <div class="text-warning">

                                        <i class=" fa fa-star"></i>
                                        <i class=" fa fa-star"></i>
                                        <i class=" fa fa-star"></i>
                                        <i class=" fa fa-star"></i>
                                        <i class=" fa fa-star"></i>

                                    </div>
                                    <span class="m-0 p-0">
                                        <i class="fa fa-user"></i>
                                        6,692 </span>
                                </div>
                                <div class=" col-8 my-auto ml-0 p-0 ">
                                    <div class="d-flex flex-row justify-content-between mb-1">
                                        <div style="font-size: 0.8rem;"
                                            class="d-flex flex-colum justify-content-between"><span class="mr-1"><i
                                                    class="fa fa-star"></i></span><span>5</span></div>
                                        <div class="d-block w-100 ml-2">
                                            <div class="progress  progress-md">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 90%;">
                                                    90%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between mb-1">
                                        <div style="font-size: 0.8rem;"
                                            class="d-flex flex-colum justify-content-between"><span class="mr-1"><i
                                                    class="fa fa-star"></i></span><span>4</span></div>
                                        <div class="d-block w-100 ml-2">
                                            <div class="progress  progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 7%;">
                                                    7%
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row justify-content-between mb-1">
                                        <div style="font-size: 0.8rem;"
                                            class="d-flex flex-colum justify-content-between"><span class="mr-1"><i
                                                    class="fa fa-star"></i></span><span>3</span></div>
                                        <div class="d-block w-100 ml-2">
                                            <div class="progress  progress-md">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="3"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
                                                    3%
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row justify-content-between mb-1">
                                        <div style="font-size: 0.8rem;"
                                            class="d-flex flex-colum justify-content-between"><span class="mr-1"><i
                                                    class="fa fa-star"></i></span><span>2</span></div>
                                        <div class="d-block w-100 ml-2">
                                            <div class="progress  progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 1%;">
                                                    1%
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row justify-content-between">

                                        <div style="font-size: 0.8rem;"
                                            class="d-flex flex-colum justify-content-between"><span class="mr-1"><i
                                                    class="fa fa-star"></i></span><span>1</span></div>
                                        <div class="d-block w-100 ml-2 ">
                                            <div class="progress  progress-md">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                                    0%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="card box-primary-shadow">
        <div class="card-body text-center">
            <h5 class="font-weight-bold ">
                Untuk tetap menggunakan pelayanan ini silahkan lihat jam operasional dibawah ini
            </h5>
        </div>

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