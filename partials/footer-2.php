<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="bottomarea" id="transparansi-footer">
	<div class="col-default-nopad">
		<?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa-tema', $transparansi) ?>
		<?php $this->load->view($folder_themes .'/partials/peta-footer') ?>
	</div>
</div>