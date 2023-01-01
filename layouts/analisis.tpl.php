<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">

<head>
    <?php $this->load->view("$folder_themes/commons/meta"); ?>
</head>

<body class="gradient-hor-menu">
    <div id="loadingAjax" class="dimmer active" style="display: none;">
        <div class="lds-hourglass"></div>
    </div>
    <div id="loadingAjsax" style="display: none;">
        <img src="<?= base_url('assets/mytheme/images/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?= base_url('assets/mytheme/images/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <?php $this->load->view("$folder_themes/partials/header"); ?>
            <?php $this->load->view("$folder_themes/partials/horizontal"); ?>
            <?php $this->load->view("$folder_themes/partials/header-mobile"); ?>

            <div class="container app-content">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">ANALISIS DESA</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">ANALISIS</li>
                        </ol>
                    </div>
                </div>
                <div class="card accordion-wizard">
                    <div class="card-header">
                        <h3 class="card-title">Tata Cara Pengajuan Dokumen menggunakan Aplikasi PAKe-Oli</h3>
                    </div>
                    <div class="card-body">
                        <form id="form">
                            <div class="list-group">
                                <div class="list-group-item py-4" data-acc-step>
                                    <h5 class="mb-0" data-acc-title>Buka Halaman
                                        https://pake-oli.lampungselatankab.go.id</h5>
                                    <div data-acc-content>
                                        <div class="my-3">
                                            Buka Alat Penjelajah Web (mis : Chrome/Mozilla) dan Masukkan URL&nbsp;<a
                                                href="../index.html" target="_blank"
                                                style="background-color: rgb(255, 255, 255);">https://pake-oli.lampungselatankab.go.id</a>&nbsp;pada
                                            Alamat Penjelajahan<div>Maka Akan tampil Halaman Awal Aplikasi PAKe-Oli
                                                Disdukcapil Lampung Selatan&nbsp;</div>
                                            <div><br></div>
                                            <div><br></div>
                                            <div><br></div>
                                            <div><br></div>
                                            <div>
                                                <div style="text-align:center;"><img
                                                        src="../assets/images/gallery/24f6c5e03f2c628bd538da2aed0320dd.jpg"
                                                        style="cursor: default;"></div><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item py-4" data-acc-step>
                                    <h5 class="mb-0" data-acc-title>Pilih Menu</h5>
                                    <div data-acc-content>
                                        <div class="my-3">
                                            Pilih menu pada Halaman Utama<div><br>
                                                <div><img
                                                        src="../assets/images/gallery/5b2cd019a3610fbc7ade28bcf56afd3d.jpg"
                                                        align="left"><br></div>
                                            </div>

                                            <br> </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("$folder_themes/partials/footer"); ?>
    </div>
</body>

</html>