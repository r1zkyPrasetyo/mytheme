<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page"><a href="<?= site_url('galeri'); ?>">Album Galeri : </a>
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Kegiatan <?= $parent['nama']; ?></li>
		</ol>
	</div>
</div>
<div class="card accordion-wizard">
	<div class="card-header">
		<h3 class="card-title">Kegiatan <?= $parent['nama']; ?></h3>
	</div>
	<div class="card-body">
		<ul id="lightgallery" class="list-unstyled row" lg-uid="lg0">
			<?php if ($gallery): ?>
			<?php foreach ($gallery As $data): ?>
			<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
			<li class="col-xs-12 col-sm-12 col-md-3 col-xl-3 border-bottom-0 pb-0"
				data-download-url="<?= AmbilGaleri($data['gambar'],'kecil')?>"
				data-src="<?= AmbilGaleri($data['gambar'],'kecil')?>" data-sub-html="<h4><?= $data['nama']; ?></h4>"
				lg-event-uid="&amp;1">
				<a data-fancybox="gallery" href="<?= AmbilGaleri($data['gambar'],'kecil')?>" class="link-overlay thumbnail text-center mb-1">
					<img class="img-responsive img-fluid rounded" src="<?= AmbilGaleri($data['gambar'],'kecil')?>"
						alt="<?= $data['nama']; ?>">
					<span class="link-overlay-bg rounded">
						<i class="fa fa-search"></i>
					</span>

				</a>
				<h6 class="text-dark text-center"><span class="font-weight-bolder"><?= $data['nama']; ?></span></h6>
			</li>
			<div class="clearboth"></div>
			<?php endif; ?>
			<?php endforeach; ?>

			<?php $this->load->view("$folder_themes/commons/page"); ?>

			<?php else: ?>
			<p>Data tidak tersedia</p>
			<?php endif; ?>
		</ul>
	</div>
</div>