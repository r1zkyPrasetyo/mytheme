<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<div class="card box-primary-shadow">
    <div class="col-default">
        <div class="sdgsportabel-inner bgwhite bordergrey1">
            <div class="content-searching" style="display:none;">
                <div class="heading-block center">
                    <span style="font-size: 20px; font-weight: bold">Skor SDGs Desa</span>
                    <h1 id="tss-score-avg"></h1>
                    <span id="info-area" style="font-size: 14px !important; color: black"></span>
                </div>
                <input type="hidden" id="total_desa">
                <div class="row col-mb-30" id="tss-content"></div>
                <div class="divider"><i class="icon-circle"></i></div>
                <center>
                    <span style="font-weight: bold; font-size: 20px">Skor 18 Goals SDGs Desa</span> <br>
                    <small><i>Visualisasi data Skor 18 Goals SDGs Desa menggunakan Grafik Bar</i></small>
                </center>
                <div id="tss-chart" style="height:700px;"><canvas></canvas></div>

            </div>
        </div>
    </div>
</div>