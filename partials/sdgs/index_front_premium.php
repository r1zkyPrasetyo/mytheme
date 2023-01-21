<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<div class="card box-primary-shadow">
    <div class="col-default">
        <?php $evaluasi = sdgs() ?>
        <?php if ($error_msg = $evaluasi->error_msg): ?>
        <div class="alert alert-danger">
            <b><?= $error_msg ?></b>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="info-box" style="display: flex;justify-content: center; padding: 20px;">
                    <span class="info-box-number total-bumds" style="text-align: center;"><?= $evaluasi->average ?>
                        <span class="info-box-text desc-bumds" style="text-align: center;">Skor SDGs
                            <?= ucwords($this->setting->sebutan_desa) ?></span>
                    </span>
                </div>
            </div>

            <?php foreach ($evaluasi->data as $key => $value): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon">
                        <img class="sdgs-logo" src="<?= asset("images/sdgs/{$value->image}") ?>"
                            alt="<?= $value->image ?>">
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-number total-bumds"><?= $value->score ?>
                            <span class="info-box-text desc-bumds">Nilai</span>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>