<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!-- HEADER -->
<div class="header hor-header">
    <div class="container">
        <div class="d-flex">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
            <div class="">
                <a class="header-brand1 d-flex" href="<?= site_url(); ?>">
                    <img src="<?= gambar_desa($desa['logo']); ?>" width="60" class="mr-2 desktop-logo" alt="logo">
                    <img src="<?= gambar_desa($desa['logo']); ?>" width="60" class="mr-2 light-logo" alt="logo">
                    <div class="text-dark">
                        <h5 class="m-0 p-0 pt-1"><strong>LAYANAN <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></strong></h5>
                        <h4 class="font-weight-bolder m-0 p-0"><?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></h4>
                        <h5 class="m-0 p-0"><strong><?= ucwords("Prov. ".$desa['nama_propinsi'])?></strong></h5>
                    </div>
                </a><!-- LOGO -->
            </div>
            <div class="d-flex ml-auto header-right-icons header-search-icon">
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg" data-toggle="tooltip" data-placement="bottom"
                        title="Full Screen">
                        <i class="fe fe-maximize fullscreen-button"></i>
                    </a>
                    <div id="adarkLink" class="adarkLink nav-link icon full-screen-link nav-link-bg"
                        data-toggle="tooltip" data-placement="bottom" title="Dark Mode">
                        <label class="darkMode custom-switch icon  nav-link-bg">
                        </label>
                    </div>
                </div><!-- FULL-SCREEN -->
            </div>
        </div>
    </div>
</div>
<!-- End HEADER -->