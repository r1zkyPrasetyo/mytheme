<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<style>
    .maphome .leaflet-left {
        left: auto !important;
        right: 10px !important;
        margin-top: 35px;
    }
</style>

<div class="col-default">
    <div class="rowsame margin-minlr-5">
        <div class="mapleft bgwhite bordergrey1">

            <div class="maphome">
                <div id="map_canvas"
                    class="maphome-height leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    tabindex="0">
                    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(63px, 0px, 0px);">
                        <div class="leaflet-pane leaflet-tile-pane">
                            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                <div class="leaflet-tile-container leaflet-zoom-animated"
                                    style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                        role="presentation" src="https://c.tile.openstreetmap.org/14/13104/8477.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(25px, -128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://a.tile.openstreetmap.org/14/13104/8478.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(25px, 128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://b.tile.openstreetmap.org/14/13103/8477.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-231px, -128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://a.tile.openstreetmap.org/14/13105/8477.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(281px, -128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://c.tile.openstreetmap.org/14/13103/8478.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-231px, 128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://b.tile.openstreetmap.org/14/13105/8478.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(281px, 128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://b.tile.openstreetmap.org/14/13106/8477.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(537px, -128px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://c.tile.openstreetmap.org/14/13106/8478.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(537px, 128px, 0px); opacity: 1;">
                                </div>
                            </div>
                        </div>
                        <div class="leaflet-pane leaflet-shadow-pane"><img
                                src="https://temabatuah.com/assets/css/images/marker-shadow.png"
                                class="leaflet-marker-shadow leaflet-zoom-animated" alt=""
                                style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(240px, 190px, 0px);">
                        </div>
                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                        <div class="leaflet-pane leaflet-marker-pane"><img
                                src="https://temabatuah.com/assets/css/images/marker-icon.png"
                                class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                tabindex="0"
                                style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(240px, 190px, 0px); z-index: 190;">
                        </div>
                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                        <div class="leaflet-pane leaflet-popup-pane"></div>
                        <div class="leaflet-proxy leaflet-zoom-animated"
                            style="transform: translate3d(3.35484e+06px, 2.17043e+06px, 0px) scale(8192);">
                        </div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                    class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button"
                                    aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#"
                                    title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
                        </div>
                        <div class="leaflet-top leaflet-right">
                            <div class="leaflet-control-layers leaflet-control" aria-haspopup="true"><a
                                    class="leaflet-control-layers-toggle" href="#" title="Layers"></a>
                                <form class="leaflet-control-layers-list">
                                    <div class="leaflet-control-layers-base"><label>
                                            <div class="active"><input type="radio"
                                                    class="leaflet-control-layers-selector" name="leaflet-base-layers"
                                                    checked="checked"><span>
                                                    OpenStreetMap</span></div>
                                        </label><label>
                                            <div><input type="radio" class="leaflet-control-layers-selector"
                                                    name="leaflet-base-layers"><span> OpenStreetMap
                                                    H.O.T.</span></div>
                                        </label><label>
                                            <div><input type="radio" class="leaflet-control-layers-selector"
                                                    name="leaflet-base-layers"><span> Mapbox Streets</span>
                                            </div>
                                        </label><label>
                                            <div><input type="radio" class="leaflet-control-layers-selector"
                                                    name="leaflet-base-layers"><span> Mapbox Satellite</span>
                                            </div>
                                        </label><label>
                                            <div><input type="radio" class="leaflet-control-layers-selector"
                                                    name="leaflet-base-layers"><span> Mapbox
                                                    Satellite-Street</span></div>
                                        </label></div>
                                    <div class="leaflet-control-layers-separator" style="display: none;"></div>
                                    <div class="leaflet-control-layers-overlays"></div>
                                </form>
                            </div>
                        </div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com"
                                    title="A JS library for interactive maps">Leaflet</a> | <a
                                    href="https://openstreetmap.org/copyright">© OpenStreetMap</a> | <a
                                    href="https://github.com/OpenSID/OpenSID">OpenSID</a></div>
                        </div>
                    </div>
                </div>
                <div class="mapleft-head">
                    <h1 class="bgcolor-1 flexcenter">Lokasi Kantor Desa</h1>
                </div>
            </div>

            <script>
                //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
                <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
                var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
                var zoom = <?=$data_config['zoom'] ?: 10?>;
                <?php else: ?>
                    var posisi = [-1.0546279422758742,116.71875000000001];
                    var zoom = 10;
                <?php endif; ?>

                var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);

                //Menampilkan BaseLayers Peta
                var baseLayers = getBaseLayers(lokasi_kantor, '<?= $this->setting->mapbox_key; ?>');
                L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

                //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
                <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
                var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
                <?php endif; ?>
            </script>
        </div>
        <div class="mapright bgwhite bordergrey1">

            <div class="maphome">
                <div class="rowsame">
                    <div class="wilayah-left flexleft">
                        <div class="padding-10" style="margin-top:20px;">
                            <table class="table-noborder" style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>Latitude</td>
                                        <td style="width:20px;text-align:center;">:</td>
                                        <td><?=$data_config['lat']?></td>
                                    </tr>
                                    <tr>
                                        <td>Longitude</td>
                                        <td style="width:20px;text-align:center;">:</td>
                                        <td><?=$data_config['lng']?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><?= ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>
                                <?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>
                                <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?>
                                <?= ucwords("Prov. ".$desa['nama_propinsi'])?>
                            </p>
                            <p><a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']?>/<?=$data_config['lng']?>"
                                    rel="noopener noreferrer" target="_blank">Buka Peta</a></p>
                        </div>
                    </div>
                    <div class="wilayah-right">
                        <div id="map_wilayah"
                            class="maphome-height leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                            tabindex="0">
                        </div>
                    </div>
                </div>
                <div class="mapleft-head">
                    <h1 class="bgcolor-1 flexcenter">Wilayah Desa</h1>
                </div>
            </div>

            <script>
               //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
                <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
                    var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
                    var zoom = <?=$data_config['zoom'] ?: 10?>;
                <?php else: ?>
                    var posisi = [-1.0546279422758742,116.71875000000001];
                    var zoom = 10;
                <?php endif; ?>

                //Style polygon
                var style_polygon = {
                    stroke: true,
                    color: '#FF0000',
                    opacity: 1,
                    weight: 2,
                    fillColor: '#8888dd',
                    fillOpacity: 0.5
                };
                var wilayah_desa = L.map('map_wilayah').setView(posisi, zoom);

                //Menampilkan BaseLayers Peta
                var baseLayers = getBaseLayers(wilayah_desa, '<?=$this->setting->mapbox_key?>');

                L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(wilayah_desa);

                <?php if (!empty($data_config['path'])): ?>
                    var polygon_desa = <?= $data_config['path']; ?>;
                    var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
                    wilayah_desa.fitBounds(kantor_desa.getBounds());
                <?php endif; ?>
            </script>
        </div>
    </div>
</div>