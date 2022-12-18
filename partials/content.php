<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!-- START CONTENT -->
<div class="mt-5">
    <div class="">
        <div class="row">
            <style>
                .active,.carousel,.carousel-inner,.fill,.item{height:100%}.fill,.fill-first-bg{background-position:center;background-repeat:no-repeat;background-color:#5e2dd8}.fill{width:100%;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover}.fill-first-bg{height:100%!important;-webkit-background-size:100%;-moz-background-size:100%;background-size:auto;-o-background-size:100%}.carousel-item-background{background:rgba(0,0,0,.3)}.carousel-item-background.first{background:rgba(23,162,184,.9)}@media (max-width:576px){.carousel-inner{height:250px}.carousel-caption.first{display:block;top:0}.carousel-item-background.is_berita{display:block!important;background:rgba(0,0,0,.4)!important}.carousel-caption.is_berita{display:block!important;top:0}.carousel-caption h3{font-size:10pt!important}.carousel-caption.first h3{margin:auto!important}}.carousel-caption.next{top:auto!important;bottom:0!important}
            </style>
            <div class="col-md-7 col-12 d-flex align-items-stretch bg-transparent">
                <div class="card bg-transparent">
                    <div id="carousel-captions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="border-radius: 10px !important; ">
                                <!-- <img src="" alt=""> -->
                                <div class="fill-first-bg"
                                    style="border-radius: 10px !important; background-image:url('<?= gambar_desa($desa['logo']); ?>') !important;">
                                </div>
                                <div class="carousel-item-background first" style="border-radius: 10px !important; ">
                                </div>
                                <div class="carousel-caption first">
                                    <h3>
                                        <div class="h6 text-center font-weight-bolder  my-0"
                                            style="font-family: Calibri, Verdana, Helvetica, sans-serif;">
                                            Selamat Datang di Aplikasi Pelayanan Desa Mandiri <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>,
                                        </div>
                                        <div class="h6 text-center font-weight-bolder  my-0"
                                            style="font-family: Calibri, Verdana, Helvetica, sans-serif;">
                                            <br></div>
                                        <div class="h6 text-center font-weight-bolder  my-0"
                                            style="font-family: Calibri, Verdana, Helvetica, sans-serif; ">
                                            Salam takzim,</div>
                                        <div class="h5 text-center font-weight-bolder my-0"
                                            style="font-family: Calibri, Verdana, Helvetica, sans-serif; ">
                                            Kuwu</div>
                                        <div class="h4 text-center font-weight-bolder"
                                            style="font-family: Calibri, Verdana, Helvetica, sans-serif; ">
                                            ADI SUCIPTO</div>
                                        <div class="h4 text-center font-italic"></div>
                                    </h3>
                                </div>
                            </div>
                            <div class="carousel-item " style="border-radius: 10px !important;">
                                <!-- <img src="" alt=""> -->
                                <div class="fill"
                                    style="border-radius: 10px !important; background-image:url('assets/images/gallery/72e10d885f263403a8840b73784bdbc0.jpg');">
                                </div>
                                <div class="carousel-item-background d-none d-md-block "
                                    style="border-radius: 10px !important;"></div>
                                <div class="carousel-caption  next d-none d-md-block ">
                                    <h3>
                                    <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h3>
                                </div>
                            </div>

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
            <div class="col-md-5 col-12">
                <div class="row">
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="Jumlah Penduduk Semester 1 Tahun 2021">

                        <div class="card p-2 bg-primary img-card box-primary-shadow">
                            <div class="p-2  card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font">1,052,091</h3>
                                        <p class="text-white mb-0">Jumlah Penduduk</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-users text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="Jumlah Kertu Keluarga Semester 1 Tahun 2021">
                        <div class="card p-2  bg-success img-card box-success-shadow">
                            <div class="card-body p-2">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font">329,212</h3>
                                        <p class="text-white mb-0">Kartu Keluarga</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-user text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="Jumlah Penduduk Laki-Laki Semester 1 Tahun 2021">

                        <div class="card p-2 bg-info img-card box-info-shadow">
                            <div class="p-2 card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font">537,826</h3>
                                        <p class="text-white mb-0">Laki-Laki</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-male text-white fs-30 mr-2 mt-2"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-flex align-items-stretch" data-toggle="tooltip" data-placement="top"
                        title="Jumlah Penduduk Perempuan Semester 1 Tahun 2021">

                        <div class="card p-2  bg-secondary img-card box-secondary-shadow">
                            <div class="card-body p-2 ">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h3 class="mb-0 number-font">514,256</h3>
                                        <p class="text-white mb-0">Perempuan</p>
                                    </div>
                                    <div class="ml-auto d-lg-block d-none"> <i
                                            class="fa fa-female text-white fs-30 mr-2 mt-2"></i> </div>
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

    <div class="card box-primary-shadow">
        <!-- <div class="card-header m-0 p-2">
                                
                                <h3 class="card-title font-weight-bolder"><i class="fa fa-exclamation-triangle mr-3 text-danger"></i>Pelayanan Online Tidak Tersedia</h3>
                            </div> -->
        <div class="card-body text-center">
            <h5 class="font-weight-bold ">
                <i class="fa fa-exclamation-triangle mr-3 text-danger"></i> Maaf Pada saat ini jam
                pelayanan Online sedang tidak tersedia sesuai dengan jadwal pelayanan Online yang sudah
                di tetapkan
            </h5>
            <p>
                untuk tetap menggunakan pelayanan ini silahkan lihat jam operasional dibawah ini
            </p>
        </div>

        <div class="row mx-2">
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam dan Tanggal Hari ini">

                <div class="card p-2 bg-secondary img-card box-secondary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">7:51</h3>
                                <p class="text-white mb-0">Minggu,18 Desember 2022</p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Senin,    07:00 - 17:00 WIB">

                <div class="card p-2    bg-primary  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Senin</h3>
                                <p class="text-white mb-0">

                                    07:00 - 17:00 WIB
                                </p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Selasa,    07:00 - 17:00 WIB">

                <div class="card p-2    bg-primary  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Selasa</h3>
                                <p class="text-white mb-0">

                                    07:00 - 17:00 WIB
                                </p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Rabu,    07:00 - 17:00 WIB">

                <div class="card p-2    bg-primary  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Rabu</h3>
                                <p class="text-white mb-0">

                                    07:00 - 17:00 WIB
                                </p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Kamis,    07:00 - 17:00 WIB">

                <div class="card p-2    bg-primary  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Kamis</h3>
                                <p class="text-white mb-0">

                                    07:00 - 17:00 WIB
                                </p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Jumat,    07:00 - 17:00 WIB">

                <div class="card p-2    bg-primary  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Jumat</h3>
                                <p class="text-white mb-0">

                                    07:00 - 17:00 WIB
                                </p>
                            </div>
                            <div class="ml-auto d-lg-block d-none"> <i
                                    class="fa fa-clock-o text-white fs-30 mr-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Sabtu,  Tidak Ada Pelayanan">

                <div class="card p-2    bg-danger  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Sabtu</h3>
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
            <div class="col-md-3 col-6 d-flex" data-toggle="tooltip" data-placement="top"
                title="Jam Operasional Hari Minggu,  Tidak Ada Pelayanan">

                <div class="card p-2  bg-info  img-card box-primary-shadow">
                    <div class="p-2 card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h3 class="mb-0 number-font">Minggu</h3>
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
        </div>

    </div>

    <div id="banner-gplay" class="d-block d-lg-none">

    </div>

    <!-- ROW-1 CLOSED -->
    <!-- <hr class="message-inner-separator"> -->
    <!-- ROW-2 OPEN -->
    <div class="row row-cards ">

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5" id="Stat_harian">
            <div class="card bg-secondary box-secondary-shadow">
                <div class="card-header m-0 p-2">
                    <h3 class="card-title text-white">Statistic Pengajuan Harian</h3>
                </div>
                <div class="p-0 m-0">
                    <table class="table card-table table-sm table-hover table-secondary align-items-center">
                        <thead class="text-nowrap bg-secondary">
                            <tr>
                                <th class="pl-2 text-left  text-white">Jenis Pelayanan</th>
                                <th class="text-right text-white">Hari ini</th>
                            </tr>
                        </thead>
                        <tbody id="tBodyAppend" class="text-nowrap table-bordered">
                        </tbody>

                        <tfoot>

                            <tr class="font-weight-bolder">
                                <td class="pl-2 text-right">Total</td>
                                <td class="text-right">0</td>
                            </tr>

                        </tfoot>

                    </table>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="card bg-primary  box-primary-shadow">
                <div class="card-header m-0 p-2">
                    <h3 class="card-title text-white">Statistic Pengerjaan Dokumen</h3>
                </div>
                <div class="table-responsive-sm p-0 m-0">
                    <table class="table card-table table-sm table-hover  table-primary align-items-center">
                        <thead class="bg-primary text-white text-nowrap">
                            <tr>
                                <th class="pl-2 text-left text-white">Jenis Pelayanan</th>
                                <th class="text-right align-middle text-white">Dalam Proses</th>
                                <th class="text-right align-middle text-white">di Tolak</th>
                                <th class="text-right text-white align-middle">Selesai</th>
                                <th class="text-right text-white align-middle">Total</th>
                                <th class="text-center text-white align-middle">#</th>
                            </tr>
                        </thead>
                        <tbody id="tBodyAppendD2" class="text-nowrap table-bordered">


                            <tr>
                                <td class="pl-2 text-left" id="db2101"><i class="fa fa-address-card-o mr-2"
                                        style="color: #003dff ;"></i>Kartu Tanda Penduduk (KTP-el)</td>
                                <td id="belum101" class="text-right">0</td>
                                <td id="tolak101" class="text-right">263</td>
                                <td id="sudah101" class="text-right">2147</td>
                                <td id="semua101" class="text-right">2410</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2102"><i class="fa fa-users mr-2"
                                        style="color: #45a800 ;"></i>Kartu Keluarga (KK)</td>
                                <td id="belum102" class="text-right">9</td>
                                <td id="tolak102" class="text-right">1108</td>
                                <td id="sudah102" class="text-right">1682</td>
                                <td id="semua102" class="text-right">2799</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2104"><i class="fa fa-arrows-h mr-2"
                                        style="color: #007a79 ;"></i>Mutasi Penduduk (Pindah / Data...
                                </td>
                                <td id="belum104" class="text-right">0</td>
                                <td id="tolak104" class="text-right">166</td>
                                <td id="sudah104" class="text-right">1152</td>
                                <td id="semua104" class="text-right">1318</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2105"><i class="fa fa-address-card-o mr-2"
                                        style="color: #da00b7 ;"></i>Kartu Identitas Anak (KIA)</td>
                                <td id="belum105" class="text-right">1</td>
                                <td id="tolak105" class="text-right">84</td>
                                <td id="sudah105" class="text-right">845</td>
                                <td id="semua105" class="text-right">930</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2201"><i class="fa fa-user-plus mr-2"
                                        style="color: #ca0095 ;"></i>Kutipan Akta Kelahiran</td>
                                <td id="belum201" class="text-right">1</td>
                                <td id="tolak201" class="text-right">404</td>
                                <td id="sudah201" class="text-right">920</td>
                                <td id="semua201" class="text-right">1325</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2202"><i class="fa fa-bed mr-2"
                                        style="color: #8100cd ;"></i>Kutipan Akta Kematian</td>
                                <td id="belum202" class="text-right">0</td>
                                <td id="tolak202" class="text-right">77</td>
                                <td id="sudah202" class="text-right">223</td>
                                <td id="semua202" class="text-right">300</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2203"><i class="fa fa-random mr-2"
                                        style="color: #cf0052 ;"></i>Kutipan Akta Perceraian</td>
                                <td id="belum203" class="text-right">0</td>
                                <td id="tolak203" class="text-right">1</td>
                                <td id="sudah203" class="text-right">0</td>
                                <td id="semua203" class="text-right">1</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2204"><i class="fa fa-handshake-o mr-2"
                                        style="color: #a30069 ;"></i>Kutipan Akta Perkawinan</td>
                                <td id="belum204" class="text-right">0</td>
                                <td id="tolak204" class="text-right">1</td>
                                <td id="sudah204" class="text-right">1</td>
                                <td id="semua204" class="text-right">2</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2301"><i class="fa fa-unlink mr-2"
                                        style="color: #9eba00 ;"></i>Update Data Tidak Online</td>
                                <td id="belum301" class="text-right">3</td>
                                <td id="tolak301" class="text-right">286</td>
                                <td id="sudah301" class="text-right">2761</td>
                                <td id="semua301" class="text-right">3050</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td class="pl-2 text-left" id="db2501"><i class="fa fa-bus mr-2"
                                        style="color: #ff0000 ;"></i>Pelayanan Kependudukan Sakit, ...
                                </td>
                                <td id="belum501" class="text-right">0</td>
                                <td id="tolak501" class="text-right">0</td>
                                <td id="sudah501" class="text-right">1</td>
                                <td id="semua501" class="text-right">1</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>

                        </tbody>



                        <tfoot>

                            <tr class="font-weight-bolder">
                                <td class="pl-2 text-right">Total</td>
                                <td id="total_proses" class="text-right">14</td>
                                <td id="total_tolak" class="text-right">2390</td>
                                <td id="total_selesai" class="text-right">9732</td>
                                <td id="total_semua" class="text-right">12136</td>
                                <td class="text-center"> <a target="_blank" href="#" class="text-center mx-auto"><i
                                            class="mx-auto fa fa-link text-primary"></i></a></td>
                            </tr>


                        </tfoot>



                    </table>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- ROW-2 CLOSED -->
</div>
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <small class="text-muted">Total Pengajuan</small>
                <h2 class="number-font">12,136 Dokumen</h2>
                <div class="progress grouped h-3">
                    <div class="progress-bar bg-warning" style="width: 0%;" role="progressbar" data-toggle="tooltip"
                        data-placement="top" title="Belum Verfikasi : 14"></div>
                    <div class="progress-bar bg-primary" style="width: 100%;" role="progressbar" data-toggle="tooltip"
                        data-placement="top" title="Sudah Verifikasi : 12122">
                    </div>
                </div>
                <div class="row mt-3 pt-3">
                    <div class="col border-right">
                        <p class=" number-font1 mb-0"><span class="dot-label bg-warning"></span>Belum
                            Verifikasi</p>
                        <h5 class="mt-2 font-weight-semibold mb-0">0%</h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-primary"></span>Sudah
                            Verfikasi</p>
                        <h5 class="mt-2 font-weight-semibold mb-0">100%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>