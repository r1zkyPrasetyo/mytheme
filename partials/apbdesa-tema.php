<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
	.progress-bar span
	{
		position: absolute;
	
	}
	
</style>
<div class="row" id="transparansi-footer" style="width: 100%; padding: 15px;">
	<?php foreach ($data_widget as $subdata_name => $subdatas): ?>
		<div class="col-md-4">
			<div align="left"><h4><?= ($subdatas['laporan'])?></h4></div>
			<?php foreach ($subdatas as $key => $subdata): ?>
				<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
					<div class="progress-group"><?= $subdata['judul']; ?><br>
						<b>Rp. <?= number_format($subdata['realisasi']); ?> | Rp. <?= number_format($subdata['anggaran']); ?></b>
						<div class="progress progress-bar-striped" align="right" style="background-color: #27c8a2"><small></small>
							<div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $subdata['persen'] ?>%" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?= $subdata['persen'] ?> %</span></div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</div>
