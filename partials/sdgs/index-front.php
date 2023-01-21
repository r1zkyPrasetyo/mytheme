<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<div class="card box-primary-shadow">
    <div class="col-default">
        <div class="sdgsportabel-inner bgwhite bordergrey1">
            <div class="heading-block" style="text-align: center !important;">
                <span style="font-size: 20px; font-weight: bold">Skor SDGs Desa</span>
                <h1 data-name=tss-score-avg ></h1>
                <span data-name=info-area style="font-size: 14px !important; color: black"></span>
            </div>
            <div class="row col-mb-30" id="tss-content"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-score-sdgs">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title tss-detail-heading-score-sdgs" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="table-detail-sdgs-score">

                <table id="table-details-sdgs" class="table table-bordered">
                    <thead style="background:#E7E7E7;">
                        <tr class="text-center">
                            <th class="nowrap">No</th>
                            <th class="nowrap">Sasaran</th>
                            <th class="nowrap" width="100px">Skor</th>
                            <th class="nowrap">Volume</th>
                            <th class="nowrap">Satuan</th>
                            <th class="nowrap">Rekomendasi Program</th>
                        </tr>
                    </thead>
                    <tbody class="tss-detail-data-score-sdgs"></tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>