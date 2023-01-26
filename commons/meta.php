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
<meta property="facebook:app_id" content="147912828718">
<title>
<?php if ($single_artikel["judul"] == ""): ?>
	<?= $this->setting->website_title . ' '.  $desa_title; ?>
<?php else: ?>
	<?= $single_artikel["judul"].' - '.ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']; ?>
<?php endif; ?>
</title>

<link rel="shortcut icon" href="<?= favico_desa() ?>"/>
<meta property="og:url" content="<?= site_url(); ?>">
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
<link rel="stylesheet" href="<?= base_url('assets/mytheme/css/style_custom.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/mytheme/css/standar-color.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/mytheme/css/hijau.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/mytheme/css/responsive.css'); ?>">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/dataTables.bootstrap.min.css'); ?>">
<!-- BOOTSTRAP CSS -->
<link href="<?= base_url('assets/mytheme/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
<!-- STYLE CSS -->
<link href="<?= base_url('assets/mytheme/css/style.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/mytheme/css-dark/dark-style.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/mytheme/css/skin-modes.css'); ?>" rel="stylesheet" />
<!--HORIZONTAL CSS-->
<link href="<?= base_url('assets/mytheme/plugins/horizontal-menu/horizontal-menu.css'); ?>" rel="stylesheet" />
<!-- CUSTOM SCROLL BAR CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/mytheme/css/custom4.css'); ?>"
        media="all" />
<link href="<?= base_url('assets/mytheme/plugins/scroll-bar/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="<?= base_url('assets/mytheme/css/icons.css'); ?>" rel="stylesheet" />
<!-- SIDEBAR CSS -->
<link href="<?= base_url('assets/mytheme/plugins/sidebar/sidebar.css'); ?>" rel="stylesheet">
<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/mytheme/colors/color1.css'); ?>" />
<!--SWEET ALERT CSS-->
<link href="<?= base_url('assets/mytheme/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet" />
<!-- TABS STYLES -->
<!-- SLICK STYLES -->
<link href="<?= base_url('assets/mytheme/slick/slick.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/mytheme/slick/slick-theme.css'); ?>" rel="stylesheet" />

<link href="<?= base_url('assets/mytheme/css/tabs.css'); ?>" rel="stylesheet" />
<!-- DATA TABLE CSS -->
<link href="<?= base_url('assets/mytheme/plugins/datatable/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ if (window.scrollY == 0) window.scrollTo(0,1); } </script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script language='javascript' src="<?= base_url('assets/front/js/jquery.cycle2.min.js'); ?>"></script>
<script language='javascript' src="<?= base_url('assets/front/js/jquery.cycle2.carousel.js'); ?>"></script>
<script src="<?= base_url('assets/js/leaflet.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/layout.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.colorbox.js'); ?>"></script>
<script src="<?= base_url('assets/js/leaflet-providers.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts-3d.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/exporting.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts-more.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/sankey.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/organization.js'); ?>"></script>
<script src="<?= base_url('assets/js/highcharts/accessibility.js'); ?>"></script>
<script src="<?= base_url('assets/js/mapbox-gl.js'); ?>"></script>
<script src="<?= base_url('assets/js/leaflet-mapbox-gl.js'); ?>"></script>
<script src="<?= base_url('assets/js/peta.js'); ?>"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/mytheme/slick/slick.js"></script>
<?php $this->load->view('global/validasi_form', ['web_ui' => true]); ?>
<script type="text/javascript">
	var BASE_URL = "<?= base_url(); ?>";
</script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">
	window.setTimeout("renderDate()",1);
	days = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
	months = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	function renderDate()
	{
		var mydate = new Date();
		var year = mydate.getYear();
		if (year < 2000)
		{
			if (document.all)
				year = "19" + year;
			else
				year += 1900;
		}
		var day = mydate.getDay();
		var month = mydate.getMonth();
		var daym = mydate.getDate();
		if (daym < 10)
			daym = "0" + daym;
		var hours = mydate.getHours();
		var minutes = mydate.getMinutes();
		var seconds = mydate.getSeconds();
		if (hours <= 9)
			hours = "0" + hours;
		if (minutes <= 9)
			minutes = "0" + minutes;
		if (seconds <= 9)
			seconds = "0" + seconds;
		$('#jam').html("<B>"+days[day]+", "+daym+" "+months[month]+" "+year+"</B><br>"+hours+" : "+minutes+" : "+seconds);
		setTimeout("renderDate()",1000)
	}
	document.addEventListener('contextmenu', function(e) {
		e.preventDefault();
	});
</script>
<style type="text/css">
	#loadingAjax,.MyLoading,.lds-hourglass{z-index:99999;position:fixed;top:0;left:0;bottom:0;right:0;margin:auto}.active,.carousel,.carousel-inner,.fill,.item{height:100%}#jam{text-align:center;color:#fff}#loadingAjax,.MyLoading{overflow:hidden;cursor:wait;background-color:rgba(255,255,255,.2)}.image_preview,.image_remove{border:none;color:#fff;padding:5px;text-align:center;text-decoration:none;display:inline-block;font-size:12px;cursor:pointer;width:100%}.lds-hourglass{background-color:transparent}.sweet-alert fieldset{border:none;position:relative;display:block}.image_preview{background-color:#d43f8d}.image_preview:hover{background-color:#b11f6a}.image_preview:disabled,.image_remove:disabled{opacity:.6;cursor:not-allowed}.image_remove{background-color:#623aa2}.fill,.fill-first-bg{background-position:center;background-repeat:no-repeat;background-color:#5e2dd8}.image_remove:hover{background-color:#4e12b6!important}.sweet-alert button.cancel{background-color:#d43f8d!important;box-shadow:0 0 0 2px rgba(212,63,141,.9)!important}.sweet-alert .sa-input-error{position:absolute;top:23px;right:10px;width:20px;height:20px;opacity:0;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:.1s;transition:.1s}.sweet-alert .sa-error-container p{padding:0;margin:auto;font-weight:700}.sweet-alert .sa-error-container.show{margin-bottom:20px!important}.fill{width:100%;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover}.fill-first-bg{height:100%!important;-webkit-background-size:100%;-moz-background-size:100%;background-size:auto;-o-background-size:100%}.carousel-item-background{background:rgba(0,0,0,.3)}.carousel-item-background.first{background:rgba(23,162,184,.9)}@media (max-width:576px){.carousel-inner{height:250px}.carousel-caption.first{display:block;top:0}.carousel-item-background.is_berita{display:block!important;background:rgba(0,0,0,.4)!important}.carousel-caption.is_berita{display:block!important;top:0}.carousel-caption h3{font-size:10pt!important}.carousel-caption.first h3{margin:auto!important}}.carousel-caption.next{top:auto!important;bottom:0!important}
</style>
<div id="facebook-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfacebookml=1&version=v3.2&appId=147912828718&autoLogAppEvents=1"></script>

<!--[if lt IE 9]>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/html5shiv.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/respond.min.js"); ?>"></script>
<![endif]-->
<?php $this->load->view('head_tags_front') ?>
