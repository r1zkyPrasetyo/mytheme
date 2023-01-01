<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Data Suplemen - <?= $main['suplemen']['nama']; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url(); ?>">Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Data Suplemen - <?= $main['suplemen']['nama']; ?>
            </li>
        </ol>
    </div>
</div>
<div class="card accordion-wizard">
    <div class="card-header">
        <h3 class="card-title">Rincian Data Suplemen</h3>
    </div>
    <div class="card-body">
        <h3 class="subtitle">Rincian Data Suplemen</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered nowrap">
                <tbody>
                    <tr>
                        <td width="20%">Nama Data</td>
                        <td width="1%">:</td>
                        <td><?= $main['suplemen']['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Sasaran Terdata</td>
                        <td>:</td>
                        <td><?= $sasaran[$main['suplemen']['sasaran']]; ?></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?= $main['suplemen']['keterangan']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body">
        <h3 class="subtitle">Daftar Terdata</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="tabel-data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Jenis-kelamin</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($main['terdata'] as $key => $data): ?>
                    <tr>
                        <td class="text-center"></td>
                        <td><?= $data['terdata_nama']; ?></td>
                        <td><?= $data["tempat_lahir"]; ?></td>
                        <td><?= $data["sex"]; ?></td>
                        <td><?= $data["info"];?></td>
                    </tr>
                    <?php endforeach; ?>
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
                    'targets': [0]
                },
                {
                    'orderable': false,
                    'targets': [0]
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