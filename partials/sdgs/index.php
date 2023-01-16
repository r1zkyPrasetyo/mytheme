<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
    .desc-bumds,.total-bumds{font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal;text-align:left}.info-box{border:1px solid #d8dbe0;border-radius:10px;background-color:#fff}.info-box-icon,.sdgs-logo{border-radius:10px;width:120px;height:120px}.info-box-content{padding:5px 10px;margin-left:130px;height:120px}.info-box-icon{padding-top:0;background:#fff}.info-box-text{text-transform:capitalize}.total-bumds{font-size:32px;font-weight:700;color:#232b39;padding-top:10px;padding-bottom:10px}.desc-bumds{margin-top:8px;font-size:21px;font-weight:400;color:#5a677d}
</style>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">SDGs <?= ucwords($this->setting->sebutan_desa) ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">SDGs <?= ucwords($this->setting->sebutan_desa) ?>
            </li>
        </ol>
    </div>
</div>
<div class="card accordion-wizard">
    <div class="card-header">
        <h3 class="card-title">SDGs <?= ucwords($this->setting->sebutan_desa) ?></h3>
    </div>
    <div class="card-body">
    <?php $evaluasi = sdgs() ?>
        <?php if ($error_msg = $evaluasi->error_msg): ?>
            <div class="alert alert-danger">
                <b><?= $error_msg ?></b>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box" style="display: flex;justify-content: center;">
                        <span class="info-box-number total-bumds" style="text-align: center;"><?= $evaluasi->average ?>
                                <span class="info-box-text desc-bumds" style="text-align: center;">Skor SDGs <?= ucwords($this->setting->sebutan_desa) ?></span>
                            </span>
                        </div>
                </div>

                <?php foreach ($evaluasi->data as $key => $value): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon">
                                <img class="sdgs-logo" src="<?= asset("images/sdgs/{$value->image}") ?>" alt="<?= $value->image ?>">
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