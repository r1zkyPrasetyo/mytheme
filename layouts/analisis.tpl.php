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
            <?php $this->load->view("$folder_themes/partials/analisis"); ?>
            </div>
        </div>
        <?php $this->load->view($folder_themes .'/partials/footer') ?>
    </div>
</body>

</html>