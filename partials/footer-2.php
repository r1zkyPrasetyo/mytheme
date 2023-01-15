<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="bottomarea">
	<div class="col-default-nopad">
	<?php if (!is_null($transparansi)) $this->load->view("$folder_themes/partials/apbdesa-tema", $transparansi); ?>
		<?php $this->load->view($folder_themes .'/partials/peta-footer') ?>
	</div>
</div>