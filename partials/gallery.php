<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Kegiatan <?= $desa["nama_desa"] ?></li>
		</ol>
	</div>
</div>
<div class="card accordion-wizard">
	<div class="card-header">
		<h3 class="card-title">Kegiatan <?= $desa["nama_desa"] ?></h3>
	</div>
	<div class="card-body">
		<?php if ($gallery): ?>
		<div class="row">
			<?php foreach ($gallery As $data): ?>
			<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
			<div class="col-xs-12 col-sm-12 col-md-3 col-xl-3 border-bottom-0 pb-0">
				<div class="card entry text-center mb-2">
					<a data-fancybox="gallery" href="<?= AmbilGaleri($data['gambar'],'kecil')?>"
						title="Album : <?= "$data[nama]" ?>">
						<img class="mw-100 border" height="200" loading="lazy"
							src="<?= AmbilGaleri($data['gambar'],'kecil')?>">
					</a>
					<a class="btn btn-sm btn-purple pink-gradient"
						href="<?= site_url("first/sub_gallery/{$data['id']}") ?>" title="Album : Hidden">Lihat Album</a>
				</div>
			</div>
			<div class="clearboth"></div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<?php $this->load->view("$folder_themes/commons/page"); ?>

		<?php else: ?>
		<p>Data tidak tersedia</p>
		<?php endif; ?>
	</div>
</div>