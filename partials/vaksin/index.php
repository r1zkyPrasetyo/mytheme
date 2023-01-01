<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title"><?= $heading ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?= $heading ?></li>
        </ol>
    </div>
</div>
<div class="card accordion-wizard">
    <div class="card-header">
        <h3 class="card-title"><?= $heading ?></h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">Alamat Dusun</th>
                        <th rowspan="2">Tanggal</th>
                        <th colspan="6">Vaksin</th>
                    </tr>
                    <tr>
                        <th>I</th>
                        <th>II</th>
                        <th>III</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($main as $data) : ?>
                    <?php if ($data->vaksin_1 == 1 || $data->vaksin_2 == 1 || $data->vaksin_3 == 1) : ?>
                        <tr>
                            <td class="text-center"></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->dusun ?></td>
                            <td>
                                <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 0 && $data->vaksin_3 == 0) : ?>
                                    <?= $data->tgl_vaksin_1 ?>
                                <?php endif ?>

                                <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 1 && $data->vaksin_3 == 0) : ?>
                                    <?= $data->tgl_vaksin_2 ?>
                                <?php endif ?>

                                <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 1 && $data->vaksin_3 == 1) : ?>
                                    <?= $data->tgl_vaksin_3 ?>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php if ($data->vaksin_1 == 1 && $data->tunda == 0) : ?>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php if ($data->vaksin_2 == 1 && $data->tunda == 0) : ?>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php if ($data->vaksin_3 == 1 && $data->tunda == 0) : ?>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        var tabelData = $('#tabel-data').DataTable({
            'processing': false,
            'order': [
                [1, 'desc']
            ],
            'pageLength': 10,
            'lengthMenu': [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "Semua"]
            ],
            'columnDefs': [{
                    'searchable': false,
                    'targets': [0, 4, 5, 6]
                },
                {
                    'orderable': false,
                    'targets': [0, 4, 5, 6]
                }
            ],
            'language': {
                'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
            },
        });

        tabelData.on('order.dt search.dt', function () {
            tabelData.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>