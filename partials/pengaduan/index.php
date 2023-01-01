<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
	.col,.grid{background:#fff;color:#666;box-shadow:0 1px 4px rgba(0,0,0,.1)}.padding{padding:10px}.col{padding:10px 20px;margin-bottom:10px;text-align:center;font-weight:400}.grid .grid-header>.grid-tools a:hover,.row h3,.support ul li a:hover{color:#666}.row.grid{margin-left:0}.grid{position:relative;width:100%;border-radius:2px;margin-bottom:25px}.grid .grid-header{position:relative;border-bottom:1px solid #ddd;padding:15px 10px 10px 20px}.grid .grid-header:after,.grid .grid-header:before{display:table;content:" "}.grid .grid-header:after{clear:both}.grid .grid-header span,.grid .grid-header>.fa{display:inline-block;margin:0;font-weight:300;font-size:1.5em;float:left}.grid .grid-header span{padding:0 5px}.grid .grid-header>.fa{padding:5px 10px 0 0}.grid .grid-header>.grid-tools{padding:4px 10px}.grid .grid-header>.grid-tools a{color:#999;padding-left:10px;cursor:pointer}.grid .grid-body{margin:20px 0;font-size:.9em;line-height:1.9em}.grid .full{padding:0!important}.grid .transparent{box-shadow:none!important;margin:0!important;border-radius:0!important}.grid.top.black>.grid-header{border-top-color:#000!important}.grid.bottom.black>.grid-body{border-bottom-color:#000!important}.grid.top.blue>.grid-header{border-top-color:#007be9!important}.grid.bottom.blue>.grid-body{border-bottom-color:#007be9!important}.grid.top.green>.grid-header{border-top-color:#00c273!important}.grid.bottom.green>.grid-body{border-bottom-color:#00c273!important}.grid.top.purple>.grid-header{border-top-color:#a700d3!important}.grid.bottom.purple>.grid-body{border-bottom-color:#a700d3!important}.grid.top.red>.grid-header{border-top-color:#dc1200!important}.grid.bottom.red>.grid-body{border-bottom-color:#dc1200!important}.grid.top.orange>.grid-header{border-top-color:#f46100!important}.grid.bottom.orange>.grid-body{border-bottom-color:#f46100!important}.grid.no-border>.grid-header{border-bottom:0!important}.grid.top>.grid-header{border-top-width:4px!important;border-top-style:solid!important}.grid.bottom>.grid-body{border-bottom-width:4px!important;border-bottom-style:solid!important}.support ul{list-style:none;padding:0}.support ul li{padding:8px 10px}.support ul li a{color:#999;display:block}.support ul li.active{background:#0073b7}.support ul li.active a{color:#fff}.support ul.support-label li{padding:2px 0}.support h2,.support-content h2{margin-top:5px}.list-group li{padding:15px 20px 12px;cursor:pointer}.list-group li:hover{background:#eee}.support-content .fa-padding .fa{padding-top:5px;width:1.5em}.support-content .info{color:#777;margin:0}.support-content a{color:#111}.support-content .info a:hover{text-decoration:underline}.support-content .info .fa{width:1.5em;text-align:center}.support-content .number{color:#777}.support-content img{margin:0 auto;display:block}.support-content .modal-body{padding-bottom:0}.support-content-comment{padding:10px 10px 10px 30px;background:#eee;border-top:1px solid #ccc}.bg-aqua,.bg-aqua a,.bg-black a,.bg-blue,.bg-blue a,.bg-fuchsia,.bg-fuchsia a,.bg-green,.bg-green a,.bg-light-blue,.bg-light-blue a,.bg-lime,.bg-lime a,.bg-maroon,.bg-maroon a,.bg-navy,.bg-navy a,.bg-olive,.bg-olive a,.bg-orange,.bg-orange a,.bg-purple,.bg-purple a,.bg-red,.bg-red a,.bg-teal,.bg-teal a,.bg-yellow,.bg-yellow a,bg-black,bg-gray,bg-gray a{color:#f9f9f9!important}.bg-white,.bg-white a{color:#999!important}.bg-red{background-color:#f56954!important}.bg-yellow{background-color:#f39c12!important}.bg-aqua{background-color:#00c0ef!important}.bg-blue{background-color:#0073b7!important}.bg-light-blue{background-color:#3c8dbc!important}.bg-green{background-color:#00a65a!important}.bg-navy{background-color:#001f3f!important}.bg-teal{background-color:#39cccc!important}.bg-olive{background-color:#3d9970!important}.bg-lime{background-color:#01ff70!important}.bg-orange{background-color:#ff851b!important}.bg-fuchsia{background-color:#f012be!important}.bg-purple{background-color:#932ab6!important}.bg-maroon{background-color:#85144b!important}.bg-gray{background-color:#eaeaec!important}.bg-black{background-color:#222!important}
</style>
<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Pengaduan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 order-lg-2">
		<div class="card CardPengaduan">

			<div class="card-header bg-primary text-white">
				<h3 class="card-title" style="color: white;">Informasi</h3>
				<div class="card-options">
					<a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
							class="fe fe-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
							class="fe fe-maximize"></i></a>
				</div>
			</div>
			<div class="card-body">
				<p>
					<span class="font-weight-bolder ">

						HARAP DIBACA...!!!
					</span>
					<br>
					Formulir ini digunakan Dalam pengaduan permasalahan pelayanan secara online/offline ataupun
					permasalahan yang belum terselesaikan,
					<span class="font-weight-bolder ">
						dan karena ini bersifat publik untuk itu di mohon tidak mencantumkan NIK, Nomor KK atau
						data pribadi lainnya dalam kolom permasalahan
					</span>
				</p>
				<a href="javascript:;" class="btn btn-secondary" id="Jump"> Lihat Daftar Pengaduan</a>
			</div>
		</div>
	</div>
	<div class="col-lg-8 order-lg-1">
		<div class="card CardPengaduan">

			<div class="card-header bg-secondary text-white">
				<h3 class="card-title" style="color: white;">Formulir Pengaduan</h3>
				<div class="card-options">
					<a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
							class="fe fe-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
							class="fe fe-maximize"></i></a>
				</div>
			</div>
			
			<form action="<?= $form_action; ?>" method="POST" enctype="multipart/form-data">
			<div class="card-body">
				<!-- Notifikasi -->
				<?php if (($notif = session('notif')) && (!session('notif')['data'])) : ?>
					<div id="notifikasi" class="alert alert-<?= $notif['status']; ?>" role="alert">
						<?= $notif['pesan']; ?>
					</div>
				<?php endif; ?>
				<?php if (($notif = session('notif')) && ($data = session('notif')['data'])) : ?>
				<div class="alert alert-danger" role="alert">
					<?= $notif['pesan']; ?>
				</div>
				<?php endif; ?>
				<div class="form-group">
					<input name="nik" type="text" maxlength="16" class="form-control" placeholder="NIK"
						value="<?= $data['nik']; ?>">
				</div>
				<div class="form-group">
					<input name="nama" type="text" class="form-control" placeholder="Nama*" value="<?= $data['nama']; ?>" required>
				</div>
				<div class="form-group">
					<input name="email" type="email" class="form-control" placeholder="Email" value="<?= $data['email']; ?>">
				</div>
				<div class="form-group">
					<input name="telepon" type="text" class="form-control" placeholder="Telepon" value="<?= $data['telepon']; ?>">
				</div>
				<div class="form-group">
					<input name="judul" type="text" class="form-control" placeholder="Judul*" value="<?= $data['judul']; ?>"
						required>
				</div>
				<div class="form-group">
					<textarea name="isi" class="form-control" placeholder="Isi Pengaduan*" rows="5"
						required><?= $data['isi']; ?></textarea>
				</div>
				<div class="form-group">
					<div class="input-group">
						<input type="text" accept="image/*" onchange="readURL(this);" class="form-control" id="file_path" placeholder="Unggah Foto" name="foto" value="<?= $data['foto']; ?>">
						<input type="file" accept="image/*" onchange="readURL(this);" style="display: none !important;" id="file" name="foto" value="<?= $data['foto']; ?>">
						<span class="input-group-btn">
							<button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<small>Gambar: png,jpg,jpeg</small><br>
					<br><img id="blah" src="#" alt="gambar" class="img-responsive hidden" />
				</div>
				<div class="form-group row d-md-flex clearfix">
					<label class="col-md-3 form-label font-weight-bolder">Kode Keamanan<sup class="small text-red">*)</sup></label>
					<span class="col-md-3 order-md-2 pb-lg-0 pb-2">
						<img id="captcha" src="<?= base_url('securimage/securimage_show'); ?>"
							style="width: 150px; height: 40px; border: 0;" alt=" "> </span>
					<div class="row col-md-5 order-md-1 d-flex">
						<div class="input-validate col-md-8" id="formCaptcha">
							<input autocomplete="off" type="tel" class="form-control" id="captcha_code" name="captcha_code"
								maxlength="5" placeholder="..." required="">
						</div>
						<span class="col-auto">
							<button id="b-captcha" class="btn btn-info" type="button"
								onclick="document.getElementById('captcha').src = '<?= base_url() . "securimage/securimage_show.php?" ?>' + Math.random(); return false"
								style="color: #000000;"><i class="fa fa-repeat"></i></button>
						</span>
						<small class="offset-md-0 col-12 pl-md-3 text-muted">* Masukkan Kode
							Keamanan</small>
					</div>
				</div>
				<div class="text-right col-md-11">
					<input type="submit" value="Kirim Aduan" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="col-lg-12 order-3" id="divFirst">
		<div class="card">
			<div class="card-header bg-primary text-white">
				<h3 class="card-title" style="color: white;">Daftar Pengaduan</h3>
				<div class="card-options">
					<a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
							class="fe fe-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
							class="fe fe-maximize"></i></a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 my-auto text-lg-right order-lg-2">
						<a href="#top" class="btn btn-secondary" id="back-to-top2"> Formulir Pengaduan</a>

					</div>
					<div class="form-group col-lg-6 order-lg-1">
						<label for="nik" class="form-label font-weight-bolder">Pencarian...</label>
						<div class="input-validate d-flex">
							<input autocomplete="off" class="form-control" onkeyup="filterArsip()" id="cari_daftar"
								name="cari_daftar" type="text" placeholder="Ketik disini">
							<button type="button" id="clear-input" class="btn btn-primary">
								<i class="fa fa-trash"></i>
							</button>
						</div>

					</div>
				</div>
				<div class="vscroll" style="max-height: 70vh;">
							<?php if ($pengaduan) : ?>
								<ul id="ul-daftar">
									<?php foreach ($pengaduan as $key => $value) : ?>
										<li class="parent-list">
											<div class="media media-lg">
												<img class="mr-3 mb-4 brround avatar-md mCS_img_loaded"
													src="<?= base_url('assets/mytheme/images/icon/team.svg'); ?>"
													alt="Generic placeholder image">
												<div class="media-body overflow-hidden">
													<span class="float-right text-right mr-2">
														<div class="font-weight-bolder">
															NO : #<?= $value['id']; ?> </div>
															<?php if ($value['status'] == '1') : ?>
																<span class="label label-danger">Menunggu Diproses</span>
															<?php elseif ($value['status'] == '2') : ?>
																<span class="label label-info">Sedang Diproses</span>
															<?php elseif ($value['status'] == '3') : ?>
																<span class="label label-success">Selesai Diproses</span>
															<?php endif; ?>
														<div class="badge badge-success p-1"> Terjawab</div>
													</span>
													<h4 class="h6 mt-0 mb-0"><?= $value['nama']; ?></h4>
													<p class="mt-0 mb-1 pt-0 text-muted"><?= $value['created_at'] ?></p>
													<p class="font-weight-bolder py-1 my-1 ">

														Subjek : <?= $value['judul'] ?></p>

													<span class="font-weight-bolder">
														Isi Pengaduan : </span> <?= substr($value['isi'], 0, 50); ?>
															<?php if (strlen($value['isi']) > 50) : ?><label class="text-info">read
																more...</label><?php endif; ?>

													<hr class="message-inner-separator my-1">
													<div class="media media-lg mt-3">
														<img class="mr-3 mb-4 mCS_img_loaded"
															src="<?= gambar_desa($desa['logo']); ?>"
															alt="Generic placeholder image">
														<div class="media-body overflow-hidden">
															<h4 class="h6 mt-0 mb-0">Admin Desa</h4>
															<p class="mt-0 pt-0 text-muted">Selasa, 06 Juli 2021</p>
															<span class="font-weight-bolder">
																Solusi / Jawaban : </span>
																<?= substr($value['isi'], 0, 50); ?> <?php if (strlen($value['isi']) > 50) : ?><label class="text-info">read more...</label><?php endif; ?>
														</div>
													</div>

												</div>
											</div>
											<hr class="message-inner-separator mb-5">
										</li>
									<?php endforeach; ?>
									</ul>
								
							<?php $this->load->view("$folder_themes/commons/page"); ?>
							<?php else : ?>
							<div class="alert alert-info" role="alert">
								Data tidak tersedia
							</div>
							<?php endif; ?>
							</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		window.setTimeout(function () {
			$("#notifikasi").fadeTo(500, 0).slideUp(500, function () {
				$(this).remove();
			});
		}, 1000);
	});

	$('#b-captcha').click();

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah').removeClass('hidden');
				$('#blah').attr('src', e.target.result).width(150).height(auto);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>