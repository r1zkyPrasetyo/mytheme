<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!-- Mobile Header -->
<div class="mobile-header hor-mobile-header">
    <div class="container">
        <div class="d-flex">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
            <a class="header-brand d-flex" href="<?= base_url(); ?>">
                <img src="<?= gambar_desa($desa['logo']); ?>" width="50"
                    class="header-brand-img mt-2 mr-2 desktop-logo" alt="logo">
                <img src="<?= gambar_desa($desa['logo']); ?>" width="50"
                    class="header-brand-img mt-2 mr-2  mobile-light" alt="logo">
                <div class="text-dark">
                    <h6 class="m-0 p-0 pt-2"><strong>LAYANAN</strong></h6>
                    <h5 class="font-weight-bolder m-0 p-0"> <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h5>
                </div>
            </a><!-- LOGO -->
            <div class="d-flex order-lg-2 ml-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <div class="d-flex order-lg-2 mt-5 ml-auto">
            <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link nav-link-bg">
                    <i class="fe fe-maximize fullscreen-button"></i>
                </a>
            </div><!-- FULL-SCREEN -->
            <div class="dropdown d-md-flex">
                <div class="nav-link icon full-screen-link nav-link-bg">
                    <label class="darkMode custom-switch icon  nav-link-bg">

                    </label>
                </div>
            </div><!-- DARK MODE -->
        </div>
    </div>
</div>
<!-- /Mobile Header -->