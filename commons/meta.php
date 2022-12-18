<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php $desa_title =  ucwords($this->setting->sebutan_desa) . ' '. $desa['nama_desa'] . ' '. ucwords($this->setting->sebutan_kecamatan) . ' '. $desa['nama_kecamatan'] . ' '. ucwords($this->setting->sebutan_kabupaten) . ' '. $desa['nama_kabupaten']; ?>

<meta http-equiv="encoding" content="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='viewport' content='width=device-width, initial-scale=1' />
<meta name='google' content='notranslate' />
<meta name='theme' content='Mytheme' />
<meta name='designer' content='Rizky Prasetyo' />
<meta name='theme:designer' content='Rizky Prasetyo.' />
<meta name="keywords" content="<?= $this->setting->website_title . ' '.  $desa_title; ?>"/>
<meta property="og:site_name" content="<?=  $desa_title;?>"/>
<meta property="og:type" content="article"/>
<meta property="fb:app_id" content="147912828718">
<title>
<?php if ($single_artikel["judul"] == ""): ?>
	<?= $this->setting->website_title . ' '.  $desa_title; ?>
<?php else: ?>
	<?= $single_artikel["judul"].' - '.ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']; ?>
<?php endif; ?>
</title>

<link rel="shortcut icon" href="<?= favico_desa() ?>"/>
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:title" content="<?= $this->setting->website_title . ' '.  $desa_title; ?>">
<meta property="og:description" content="<?= $this->setting->website_title . ' '.  $desa_title; ?>">
<meta property="og:image" content="<?= favico_desa() ?>">
<?php if(isset($single_artikel)): ?>
	<meta property="og:title" content="<?= htmlspecialchars($single_artikel["judul"]); ?>"/>
	<meta property="og:url" content="<?= site_url('artikel/'.buat_slug($single_artikel))?>"/>
	<meta property="og:image" content="<?= base_url(''); ?><?= LOKASI_FOTO_ARTIKEL?>sedang_<?= $single_artikel['gambar'];?>"/>
	<meta property="og:description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
<?php else: ?>
	<meta property="og:title" content="<?= $desa_title; ?>"/>
	<meta property="og:url" content="<?= site_url() ?>"/>
	<meta property="og:description" content="<?= $this->setting->website_title . ' '.  $desa_title; ?>"/>
<?php endif; ?>
<link rel="stylesheet" href="<?= base_url('assets/css/leaflet.css'); ?>"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
<link rel="stylesheet" href="<?= base_url('assets/css/mapbox-gl.css'); ?>"/>
<link rel="stylesheet" href="<?= base_url('assets/css/peta.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/dataTables.bootstrap.min.css'); ?>">
<!-- BOOTSTRAP CSS -->
<link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
<style type="text/css">
    .ui-datepicker{z-index:100000!important}#loadingAjax,.MyLoading,.lds-hourglass{z-index:99999;position:fixed;top:0;left:0;bottom:0;right:0;margin:auto}#loadingAjax,.MyLoading{overflow:hidden;cursor:wait;background-color:rgba(255,255,255,.2)}.image_preview,.image_remove{border:none;color:#fff;padding:5px;text-align:center;text-decoration:none;display:inline-block;font-size:12px;cursor:pointer;width:100%}.lds-hourglass{background-color:transparent}.sweet-alert fieldset{border:none;position:relative;display:block}.image_preview{background-color:#d43f8d}.image_preview:hover{background-color:#b11f6a}.image_preview:disabled,.image_remove:disabled{opacity:.6;cursor:not-allowed}.image_remove{background-color:#623aa2}.image_remove:hover{background-color:#4e12b6!important}.sweet-alert button.cancel{background-color:#d43f8d!important;box-shadow:0 0 0 2px rgba(212,63,141,.9)!important}.sweet-alert .sa-input-error{position:absolute;top:23px;right:10px;width:20px;height:20px;opacity:0;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:.1s;transition:.1s}.sweet-alert .sa-error-container p{padding:0;margin:auto;font-weight:700}.sweet-alert .sa-error-container.show{margin-bottom:20px!important}
</style>
<!-- STYLE CSS -->
<link href="<?= base_url('assets/mytheme/css/style.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/mytheme/css-dark/dark-style.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/mytheme/css/skin-modes.css'); ?>" rel="stylesheet" />
<!--HORIZONTAL CSS-->
<link href="<?= base_url('assets/mytheme/plugins/horizontal-menu/horizontal-menu.css'); ?>" rel="stylesheet" />
<!-- CUSTOM SCROLL BAR CSS-->
<link href="<?= base_url('assets/mytheme/plugins/scroll-bar/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="<?= base_url('assets/mytheme/css/icons.css'); ?>" rel="stylesheet" />
<!-- SIDEBAR CSS -->
<link href="<?= base_url('assets/mytheme/plugins/sidebar/sidebar.css'); ?>" rel="stylesheet">
<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/mytheme/colors/color1.css'); ?>" />
<!--SWEET ALERT CSS-->
<link href="<?= base_url('assets/mytheme/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet" />
