<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($single_artikel["id"]) : ?>

<!-- PAGE-HEADER -->
<div class="page-header" id="<?= 'artikel-'.$single_artikel['judul']?>">
	<div>
		<h1 class="page-title"><?= $single_artikel["judul"]?></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url(); ?>">Beranda</a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="#">Berita</a></li>

			<li class="breadcrumb-item active" aria-current="page"><?= $single_artikel["judul"]?></li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->
<style>
	.img_url_post {
		width: 100%;
		height: 55vh;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: auto 100%;
	}

	@media (max-width: 576px) {
		.img_url_post {
			height: 25vh !important;

		}
	}
</style>
<div class="card productdesc">
	<div class="card-body">
		<div class="text-center">
			<div class="bg-light-gray p-3 text-center">
				<div class="img_url_post"
					style="background-image:url('<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>') !important;">
				</div>
			</div>
		</div>

		<div class="mt-4 mb-4">
			<h3 class="mb-1"><?= $single_artikel["judul"]?></h3>
			<div class="mb-3 mt-0 text-muted ">by <?= $single_artikel['owner']?> -
				<?= tgl_indo2($single_artikel['tgl_upload']);?> - <?= hit($single_artikel['hit']) ?> Dibaca</div>
			<div class="border-top pt-3">
				<div>
					<div><strong style="border: 0px; margin: 0px; padding: 0px;"><?= $single_artikel["isi"]?></div>
				</div>
			</div>
		</div>
		
        <?php

		$share = [
			'link' => site_url('artikel/' . buat_slug($single_artikel)),
			'judul' => htmlspecialchars($single_artikel["judul"]),
		];
		$this->load->view("$folder_themes/commons/share", $share);

		?>
		<?php if ($single_artikel['boleh_komentar'] == 1) : ?>
		<div class="fb-comments" data-href="<?= site_url('artikel/' . buat_slug($single_artikel)) ?>" width="100%" data-numposts="5"></div>
	<?php endif ?>
	<div class="contact_bottom">
		<?php if (!empty($komentar)) : ?>
			<div class="contact_bottom">
				<div class="box-body">
					<?php foreach ($komentar as $data) : ?>
						<table class="table table-bordered table-striped dataTable table-hover">
							<thead class="bg-gray disabled color-palette">
								<tr>
									<th><i class="fa fa-comment"></i> <?= $data['owner'] ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<font color='green'><small><?= tgl_indo2($data['tgl_upload']) ?></small></font><br /><?= $data['komentar'] ?>
									</td>
								</tr>
							</tbody>
						</table>
					<?php endforeach ?>
				</div>
			</div>
		<?php endif ?>
	</div>
	
	<?php $this->load->view("$folder_themes/partials/komentar") ?>
	</div>
</div><!-- APP CONTENT CLOSED -->

<?php else: ?>
	<hr/>
<div class="artikel" id="artikel-blank">
	<div class="card">
		<div class="card-body">
			<div class="panel panel-primary">
				<div class="content_wrapper">
					<div class="Container">
						<div class="error_page_content">
							<h1>404</h1>
							<h2>Maaf</h2>
							<h3>Halaman ini belum tersedia atau sedang dalam perbaikan</h3>
							<p class="wow fadeInLeftBig">Silahkan kembali lagi ke halaman <a href="<?= base_url(); ?>">Beranda</a>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>