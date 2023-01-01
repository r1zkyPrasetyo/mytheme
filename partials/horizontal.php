<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!--/Horizontal-main -->
<div class="sticky">
    <div class="horizontal-main hor-menu clearfix">
        <div class="horizontal-mainwrapper container">
            <!--Nav-->
            <nav class="horizontalMenu  clearfix">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a href="<?= base_url(); ?>" class=" active "><i class="ti-home"></i> Beranda</a>
                    </li>
                    <?php foreach ($menu_atas as $data): ?>
                    <li aria-haspopup="true"><a href="<?= $data['link']?>" class="sub-icon"><?= $data['nama']; jecho(count($data['submenu']) > 0, TRUE, '<i class="fa fa-angle-down horizontal-icon"></i>'); ?>
                    </a>
                        <?php if (count($data['submenu']) > 0): ?>
                        <ul class="sub-menu">
                            <?php foreach ($data['submenu'] as $submenu): ?>
                            <li>
                                <a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
<!--/Horizontal-main -->