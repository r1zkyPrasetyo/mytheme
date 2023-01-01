<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- PAGE-HEADER -->
<hr>
<!-- PAGE-HEADER END -->
<div class="card" id="CardSearch">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">ARSIP</h3>
        <div class="card-options">
            <a href="#" class="card-options-collapse text-white" data-toggle="card-collapse"><i
                    class="fe fe-chevron-up"></i></a>
            <a href="#" class="card-options-fullscreen text-white" data-toggle="card-fullscreen"><i
                    class="fe fe-maximize"></i></a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
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
            <ul id="ul-daftar">
                <?php foreach (array('terkini' => 'arsip_terkini') as $jenis => $jenis_arsip) : ?>
                <?php foreach ($$jenis_arsip as $arsip): ?>
                <li class="parent-list">
                    <div class="media media-lg">
                        <div class="media-body overflow-hidden">
                            <span class="float-right text-right mr-2">
                                <div class="badge badge-success p-1"> Terkini</div>
                            </span>
                            <h4 class="h6 mt-0 mb-0"><a
                                    href="<?= site_url('artikel/'.buat_slug($arsip))?>"><?= $arsip['judul']?></a></h4>
                            <p class="mt-0 mb-1 pt-0 text-muted"><?= tgl_indo($arsip['tgl_upload']);?></p>
                        </div>
                    </div>
                    <hr class="message-inner-separator mb-5">
                </li>
                <?php endforeach; ?>
                <?php endforeach ?>
                <?php foreach (array('populer' => 'arsip_populer') as $jenis => $jenis_arsip) : ?>
                <?php foreach ($$jenis_arsip as $arsip): ?>
                <li class="parent-list">
                    <div class="media media-lg">
                        <div class="media-body overflow-hidden">
                            <span class="float-right text-right mr-2">
                                <div class="badge badge-success p-1"> Populer</div>
                            </span>
                            <h4 class="h6 mt-0 mb-0"><a
                                    href="<?= site_url('artikel/'.buat_slug($arsip))?>"><?= $arsip['judul']?></a></h4>
                            <p class="mt-0 mb-1 pt-0 text-muted"><?= tgl_indo($arsip['tgl_upload']);?></p>
                        </div>
                    </div>
                    <hr class="message-inner-separator mb-5">
                </li>
                <?php endforeach; ?>
                <?php endforeach ?>
                <?php foreach (array('acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
                <?php foreach ($$jenis_arsip as $arsip): ?>
                <li class="parent-list">
                    <div class="media media-lg">
                        <div class="media-body overflow-hidden">
                            <span class="float-right text-right mr-2">
                                <div class="badge badge-success p-1"> Acak</div>
                            </span>
                            <h4 class="h6 mt-0 mb-0"><a
                                    href="<?= site_url('artikel/'.buat_slug($arsip))?>"><?= $arsip['judul']?></a></h4>
                            <p class="mt-0 mb-1 pt-0 text-muted"><?= tgl_indo($arsip['tgl_upload']);?></p>
                        </div>
                    </div>
                    <hr class="message-inner-separator mb-5">
                </li>
                <?php endforeach; ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>