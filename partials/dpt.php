<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Daftar Calon Pemilih (pada tgl pemilihan <?= $tanggal_pemilihan ?>)</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Daftar Calon Pemilih (pada tgl pemilihan <?= $tanggal_pemilihan ?>)</li>
		</ol>
	</div>
</div>
<div class="card accordion-wizard">
	<div class="card-header">
		<h3 class="card-title">Daftar Calon Pemilih (pada tgl pemilihan <?= $tanggal_pemilihan ?>)</h3>
	</div>
	<div class="card-body">
	<div class="table-responsive">
		<table id="dpt" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Nama Dusun</th>
			<th class="text-center">RW</th>
			<th class="text-center">Jiwa</th>
			<th class="text-center">L</th>
			<th class="text-center">P</th>
		</tr>
		</thead><?php
		if(count($main) > 0){ ?>
			<tbody><?php
			foreach($main as $data){ ?>
				<tr>
					<td class="text-center"><?= $data["no"] ?></td>
					<td class="text-left"><?= strtoupper($data["dusun"]) ?></td>
					<td class="text-center"><?= strtoupper($data["rw"]) ?></td>
					<td class="text-right"><?= $data["jumlah_warga"] ?></td>
					<td class="text-right"><?= $data["jumlah_warga_l"] ?></td>
					<td class="text-right"><?= $data["jumlah_warga_p"] ?></td>
				</tr><?php
			} ?>
			</tbody>
			<tr>
				<th colspan="3" class="text-right">TOTAL</th>
				<th class="text-right"><?= $total["total_warga"] ?></th>
				<th class="text-right"><?= $total["total_warga_l"] ?></th>
				<th class="text-right"><?= $total["total_warga_p"] ?></th>
			</tr><?php
		} else { ?>
			<tr><td colspan=6 class="text-center">Daftar masih kosong</td></tr><?php
		} ?>
		</table>
		</div>
	</div>
</div>
