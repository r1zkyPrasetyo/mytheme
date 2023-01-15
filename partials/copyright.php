<!-- FOOTER -->
<?php $this->load->view($folder_themes .'/partials/apbdesa-tema') ?>
<footer class="footer hor-footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <?= date('Y') ?><a href="#">
                    <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></a>.
                Designed by <a href="#">
                    <?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>
                </a> All
                rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->