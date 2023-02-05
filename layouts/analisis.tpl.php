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
                                <?php if ($list_jawab) : ?>
									<div class='box'>
										<?php $this->load->view("$folder_themes/partials/analisis"); ?>
									</div>
								<?php else : ?>
									<div class="">
										<div class="single_page_area">
											<h2 class="post_titile">DAFTAR AGREGASI DATA ANALISIS DESA</h2>
										</div>
										<?php if ($list_indikator): ?>
											<?php if (count($master_indikator) > 1) : ?>
												<form action="<?=site_url('data_analisis'); ?>" method="get">
													<div class="row" style="margin-bottom: 20px;">
														<label style="padding-top: 5px;" class="col-sm-1 control-label" >Analisis: </label>
														<div class="col-sm-6">
															<select class="form-control select2" name="master" onchange="this.form.submit()" style="width: 100%;">
																<?php foreach ($master_indikator as $master): ?>
																	<option value="<?= $master['id']?>" <?= selected($list_indikator['0']['id_master'], $master['id'])?> ><?= "{$master['master']} ({$master['tahun']})"?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>
												</form>
											<?php endif; ?>
											<div class="table-responsive" style="border: solid; font-size:12px;">
												<table>
														<tr>
															<td width="200">Pendataan </td>
															<td width="20"> :</td>
															<td><?= $list_indikator['0']['master']; ?></td>
														</tr>
														<tr>
															<td>Subjek </td>
															<td> : </td>
															<td><?= $list_indikator['0']['subjek']; ?></td>
														</tr>
														<tr>
															<td>Tahun </td>
															<td> :</td>
															<td><?= $list_indikator['0']['tahun']; ?></td>
														</tr>
												</table>
											</div>
											<h4 style="margin-top: 15px; margin-bottom: 10px;">Indikator</h4>
											<div class="table-responsive">
												<table>
													<?php foreach ($list_indikator AS $data): ?>
														<tr>
															<td><?= $data['nomor'].'.'; ?>
															<td><a href="<?= site_url("jawaban_analisis/$data[id]/$data[subjek_tipe]/$data[id_periode]"); ?>"><h5><b><?= $data['indikator']?></b></h5></a></td>
														</tr>
													<?php endforeach; ?>
												</table>
											</div>
										<?php else: ?>
											<p>Data tidak tersedia</p>
										<?php endif; ?>
									</div>
								<?php endif; ?>
            </div>
        </div>
        <?php $this->load->view($folder_themes .'/partials/footer') ?>
    </div>
</body>

</html>