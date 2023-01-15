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
                    <div class="col-default">
                    <div class="jadwal-shalat bgwhite bordergrey1" id="jadwal-shalat">
                            <div class="rowsame margin-minlr-5">
                                <div class="jadwalshalat-judul flexleft">
                                    <div>
                                        <div class="jadwalshalat-judul-inner">
                                            <img src="<?= base_url('assets/mytheme/images/icon/shalat.svg'); ?>">
                                            <div class="flexleft">
                                                <div>
                                                    <h2>Sosial Media Desa</h2>
                                                    <h3 class="color-2">
                                                        <b><?= ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></b>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jadwalshalat-isi">
                                    <div class="rowsame margin-minlr-5">
                                    <div class="widget-inner flexcenter">
                                                <a href="https://www.facebook.com/rehmanillah.afani/" target="_blank"
                                                    rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="https://twitter.com/Rohman_mukomuko" target="_blank"
                                                    rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="https://www.youtube.com/channel/UCsIiVFyJpHXUAiCNDDCddcw"
                                                    target="_blank" rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="https://www.instagram.com/Rohman_mukomuko/" target="_blank"
                                                    rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z">
                                                            </path>
                                                            <circle cx="11.994" cy="11.979" r="3.003"></circle>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="https://api.whatsapp.com/send?phone=+6282269993730"
                                                    target="_blank" rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2.004 22l1.352-4.968A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.954 9.954 0 0 1-5.03-1.355L2.004 22zM8.391 7.308a.961.961 0 0 0-.371.1 1.293 1.293 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.729 2.729 0 0 0 6.9 9.62c.002.49.13.967.33 1.413.409.902 1.082 1.857 1.971 2.742.214.213.423.427.648.626a9.448 9.448 0 0 0 3.84 2.046l.569.087c.185.01.37-.004.556-.013a1.99 1.99 0 0 0 .833-.231c.166-.088.244-.132.383-.22 0 0 .043-.028.125-.09.135-.1.218-.171.33-.288.083-.086.155-.187.21-.302.078-.163.156-.474.188-.733.024-.198.017-.306.014-.373-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.401-.621a.498.498 0 0 0-.177-.041.482.482 0 0 0-.378.127v-.002c-.005 0-.072.057-.795.933a.35.35 0 0 1-.368.13 1.416 1.416 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.109l-.005-.002a6.01 6.01 0 0 1-1.57-1c-.126-.11-.243-.23-.363-.346a6.296 6.296 0 0 1-1.02-1.268l-.059-.095a.923.923 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41a4.38 4.38 0 0 0 .263-.373c.118-.19.155-.385.093-.536-.28-.684-.57-1.365-.868-2.041-.059-.134-.234-.23-.393-.249-.054-.006-.108-.012-.162-.016a3.385 3.385 0 0 0-.403.004z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="https://t.me/Rohman_bengkulu" target="_blank" rel="noopener">
                                                    <div class="social-icon flexcenter">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke-width="20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-default">
                        <div class="jadwal-shalat bgwhite bordergrey1" id="jadwal-shalat">
                            <div class="rowsame margin-minlr-5">
                                <div class="jadwalshalat-judul flexleft">
                                    <div>
                                        <div class="jadwalshalat-judul-inner">
                                            <img src="<?= base_url('assets/mytheme/images/icon/shalat.svg'); ?>">
                                            <div class="flexleft">
                                                <div>
                                                    <h2>Jadwal Imsak &amp; Shalat</h2>
                                                    <h3 class="color-2"><b>Wilayah
                                                            <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></b>
                                                    </h3>
                                                    <p class="flexleft"><span id="tanggalwaktu"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        var tw = new Date();
                                        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                                        else(a = tw.getTime());
                                        tw.setTime(a);
                                        var tahun = tw.getFullYear();
                                        var hari = tw.getDay();
                                        var bulan = tw.getMonth();
                                        var tanggal = tw.getDate();
                                        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,",
                                            "Jum'at,", "Sabtu,");
                                        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei",
                                            "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember",
                                            "Desember");
                                        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " +
                                            tanggal + " " + bulanarray[bulan] + " " + tahun;
                                    </script>
                                </div>
                                <div class="jadwalshalat-isi">
                                    <div class="rowsame margin-minlr-5">
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Imsak</h3>
                                                <span class="color-2" data-name="imsak"><span>04:11</span></span>
                                            </div>
                                        </div>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Subuh</h3>
                                                <span class="color-2" data-name="subuh"><span>04:21</span></span>
                                            </div>
                                        </div>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Dzuhur</h3>
                                                <span class="color-2" data-name="dzuhur"><span>11:59</span></span>
                                            </div>
                                        </div>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Ashar</h3>
                                                <span class="color-2" data-name="ashar"><span>15:24</span></span>
                                            </div>
                                        </div>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Magrib</h3>
                                                <span class="color-2" data-name="maghrib"><span>18:13</span></span>
                                            </div>
                                        </div>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/mosque.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Isya</h3>
                                                <span class="color-2" data-name="isya"><span>19:27</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-default">
                        <div class="jadwal-shalat bgwhite bordergrey1" id="jadwal-shalat">
                            <div class="rowsame margin-minlr-5">
                                <div class="jadwalshalat-judul flexleft">
                                    <div>
                                        <div class="jadwalshalat-judul-inner">
                                            <img src="<?= base_url('assets/mytheme/images/icon/shalat.svg'); ?>">
                                            <div class="flexleft">
                                                <div>
                                                    <h2>Jam Pelayanan Kantor</h2>
                                                    <h3 class="color-2">
                                                        <b><?= ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></b>
                                                    </h3>
                                                    <p class="flexleft"><span id="tanggalwaktu"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jadwalshalat-isi">
                                    <div class="rowsame margin-minlr-5">

                                        <?php foreach ($jam_kerja as $value) : ?>
                                        <?php if ($value->status) : ?>
                                        <div class="jadwal-box">
                                            <div class="mosque"><img
                                                    src="<?= base_url('assets/mytheme/images/icon/work.svg'); ?>">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1"><?= $value->nama_hari ?></h3>
                                                <span class="color-2"><span><?= $value->jam_masuk ?></span></span>
                                            </div>
                                        </div>
                                        <?php else : ?>
                                        <?php endif ?>
                                        <?php endforeach ?>
                                        <div class="jadwal-box">
                                            <div class="mosque">
                                            </div>
                                            <div style="position:relative;z-index:1;">
                                                <h3 class="color-1">Sabtu</h3>
                                                <span class="color-2"><span>Libur</span></span>
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
                <h3 class="card-title">STATISTIK DESA</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
                            class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
                            class="fe fe-maximize"></i></a>
                </div>
            </div>
            <!-- <div class="card-body">
            <div class="row-cards" id="statistik">
                <div class="row mx-2">
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Jumlah Laki-laki">
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
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Jumlah Perempuan">
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
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Jumlah Penduduk">
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
                    <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Jumlah Kertu Keluarga">
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
                </div>
            </div>
        </div> -->
            <div class="col-default">
                <div class="statistik-row bggrad-grey1 bordergrey1">
                    <div class="stathead flexcenter">
                        <h1 class="bgcolor-1 flexcenter">Statistik Desa</h1>
                    </div>
                    <div class="statistik-inner">
                        <div class="circle-area">
                            <div class="statcircle bgwhite flexcenter">
                                <div>
                                    <img class="flip-vertical-right"
                                        src="<?= base_url('assets/mytheme/images/icon/population.svg'); ?>">
                                    <p>Populasi</p>
                                    <h2 class="color-2" data-name="jmlpenduduk"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="statleft">
                            <a href="<?= site_url(); ?>data-wilayah">
                                <div class="statleft1 statbox bgwhite flexleft bordergrey1 hover-height2">
                                    <p>Data <font class="desktop-only">Berdasarkan</font> Wilayah</p>
                                    <div class="staticon bgbiru bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M14,11.5A2.5,2.5 0 0,0 16.5,9A2.5,2.5 0 0,0 14,6.5A2.5,2.5 0 0,0 11.5,9A2.5,2.5 0 0,0 14,11.5M14,2C17.86,2 21,5.13 21,9C21,14.25 14,22 14,22C14,22 7,14.25 7,9A7,7 0 0,1 14,2M5,9C5,13.5 10.08,19.66 11,20.81L10,22C10,22 3,14.25 3,9C3,5.83 5.11,3.15 8,2.29C6.16,3.94 5,6.33 5,9Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                            <a href="<?= site_url(); ?>first/statistik/1">
                                <div class="statleft2 statbox bgwhite flexleft bordergrey1 hover-height2">
                                    <p>Data <font class="desktop-only">Berdasarkan</font> Pekerjaan</p>
                                    <div class="staticon bgorange bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M20,6H16V4A2,2 0 0,0 14,2H10C8.89,2 8,2.89 8,4V6H4C2.89,6 2,6.89 2,8V19A2,2 0 0,0 4,21H20A2,2 0 0,0 22,19V8A2,2 0 0,0 20,6M10,4H14V6H10V4M12,9A2.5,2.5 0 0,1 14.5,11.5A2.5,2.5 0 0,1 12,14A2.5,2.5 0 0,1 9.5,11.5A2.5,2.5 0 0,1 12,9M17,19H7V17.75C7,16.37 9.24,15.25 12,15.25C14.76,15.25 17,16.37 17,17.75V19Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                            <a href="<?= site_url(); ?>first/statistik/14">
                                <div class="statleft3 statbox bgwhite flexleft bordergrey1 hover-height2">
                                    <p>Data <font class="desktop-only">Statistik</font> Pendidikan <font
                                            class="desktop-only">Ditempuh</font>
                                    </p>
                                    <div class="staticon bgtoska bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M12,8A3,3 0 0,0 15,5A3,3 0 0,0 12,2A3,3 0 0,0 9,5A3,3 0 0,0 12,8M12,11.54C9.64,9.35 6.5,8 3,8V19C6.5,19 9.64,20.35 12,22.54C14.36,20.35 17.5,19 21,19V8C17.5,8 14.36,9.35 12,11.54Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                        </div>
                        <div class="statright">
                            <a href="<?= site_url(); ?>first/statistik/2">
                                <div class="statright1 statbox bgwhite flexright bordergrey1 hover-height2">
                                    <div class="staticon bgpink bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p>Data <font class="desktop-only">Statistik Status</font> Perkawinan</p>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                            <a href="<?= site_url(); ?>first/statistik/3">
                                <div class="statright2 statbox bgwhite flexright bordergrey1 hover-height2">
                                    <div class="staticon bgyellow bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M7.9 21.47C6 19.81 5.35 17.17 6.18 14.84L8.31 8.91C8.53 8.3 9.36 8.22 9.69 8.78L10 9.33C10.24 9.72 10.29 10.2 10.14 10.63L9.16 13.37L9.59 13.75L15.55 7C15.9 6.6 16.5 6.56 16.91 6.91C17.3 7.26 17.34 7.87 17 8.26L12.55 13.29L13.13 13.8L18.58 7.62C18.93 7.22 19.54 7.18 19.93 7.53C20.33 7.88 20.37 8.5 20 8.89L14.56 15.07L15.14 15.58L19.83 10.26C20.18 9.86 20.79 9.82 21.18 10.17S21.62 11.13 21.27 11.5L16.58 16.84L17.15 17.35L20.32 13.76C20.67 13.36 21.28 13.32 21.68 13.67S22.11 14.63 21.76 15L16.56 20.92C14.32 23.47 10.44 23.71 7.9 21.47M11.59 9.22L14.43 6C14.67 5.73 14.97 5.5 15.3 5.37L15.68 4.59C15.92 4.12 15.72 3.54 15.24 3.31C14.77 3.08 14.19 3.28 13.96 3.75L11.45 8.89C11.5 9 11.56 9.11 11.59 9.22M11 8L11 8.05L13.78 2.38C14 1.9 13.81 1.33 13.33 1.1C12.86 .865 12.28 1.06 12.05 1.54L9.41 6.95C10.06 7.06 10.63 7.43 11 8M4.77 14.33L6.9 8.4C7.17 7.65 7.8 7.14 8.55 6.97L10.69 2.58C10.92 2.1 10.72 1.53 10.25 1.3C9.77 1.07 9.2 1.26 8.97 1.74L5 9.84L4.5 9.59L4.71 6.68C4.75 6.23 4.57 5.78 4.25 5.46L3.79 5C3.32 4.57 2.55 4.86 2.5 5.5L2 11.79C1.87 13.83 2.77 15.78 4.35 17C4.33 16.12 4.46 15.21 4.77 14.33Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p>Data <font class="desktop-only">Statistik Berdasarkan</font> Agama</p>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                            <a href="<?= site_url(); ?>first/dpt">
                                <div class="statright3 statbox bgwhite flexright bordergrey1">
                                    <div class="staticon bgungu bordergrey1 flexcenter">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M5 6C3.9 6 3 6.9 3 8S3.9 10 5 10 7 9.11 7 8 6.11 6 5 6M12 4C10.9 4 10 4.89 10 6S10.9 8 12 8 14 7.11 14 6 13.11 4 12 4M19 2C17.9 2 17 2.9 17 4S17.9 6 19 6 21 5.11 21 4 20.11 2 19 2M3.5 11C2.67 11 2 11.67 2 12.5V17H3V22H7V17H8V12.5C8 11.67 7.33 11 6.5 11H3.5M10.5 9C9.67 9 9 9.67 9 10.5V15H10V20H14V15H15V10.5C15 9.67 14.33 9 13.5 9H10.5M17.5 7C16.67 7 16 7.67 16 8.5V13H17V18H21V13H22V8.5C22 7.67 21.33 7 20.5 7H17.5Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p>
                                        <font class="desktop-only">Daftar Pemilih Tetap</font>
                                        <font class="mobile-only">Data Pemilih</font>
                                    </p>
                                    <div class="stat-arrow"></div>
                                </div>
                            </a>
                        </div>
                        <div class="population flexcenter">

                            <div class="population-item flexright" style="text-align:right;width:50%;float:left;">
                                <div>
                                    <h2 data-name="laki-laki"></h2>
                                    <h3>LAKI-LAKI</h3>
                                </div>
                                <img style="margin:0 5px;" src="<?= base_url('assets/mytheme/images/icon/man.svg'); ?>">
                            </div>

                            <div class="population-item flexleft" style="text-align:left;width:50%;float:right;">
                                <img style="margin:0 5px;"
                                    src="<?= base_url('assets/mytheme/images/icon/woman.svg'); ?>">
                                <div>
                                    <h2 data-name="perempuan"></h2>
                                    <h3>PEREMPUAN</h3>
                                </div>
                            </div>

                        </div>
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
                        <table class="table table-bordered table-striped dataTable table-hover"
                            id="statistik-list-surat">
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
        <div class="card CardPengaduan">
            <div class="col-default">
                <div class="aparatur bgwhite bordergrey1">
                    <div class="aparatur-head flexleft">
                        <div class="head-icon bgcolor-1 flexcenter">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                            </svg>
                        </div>
                        <h1>Aparatur Desa</h1>
                    </div>
                    <div class="rowsame margin-minlr-5">
                        <div class="pimpinan">
                            <div class="framepimpinan bgcolor-3">
                                <div class="image-aparatur">
                                    <span data-name="foto"></span>
                                    <div class="staf-nama">
                                        <h3 data-name="jabatan"></h3>
                                        <p data-name="kades"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="staf">
                            <div class="margin-minlr-5">
                                <div class="bcarousel js-flickity"
                                    data-flickity='{ "autoPlay": true, "cellAlign": "left", "wrapAround": true }'>
                                    <?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
                                    <div class="bcarousel-part">
                                        <div class="margin-lr-5">
                                            <div class="framepimpinan bgcolor-3">
                                                <div class="image-staf">
                                                    <img src="<?= $data['foto'] ?>" alt="<?= $data['nama']?>">
                                                    <div class="staf-nama flexcenter">
                                                        <p><?= $data['nama']?></p>
                                                    </div>
                                                </div>
                                                <div class="staf-title flexcenter">
                                                    <div>
                                                        <p><?= $data['jabatan']?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <p class="number-font1 mb-0"><span class="dot-label bg-secondary"></span>Sedang diPeriksa
                            </p>
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