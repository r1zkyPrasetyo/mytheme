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
                            <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(76px, 0px, 0px);">
                                <div class="leaflet-pane leaflet-tile-pane">
                                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                        <div class="leaflet-tile-container leaflet-zoom-animated"
                                            style="z-index: 18; transform: translate3d(127px, 118px, 0px) scale(0.5);">
                                        </div>
                                        <div class="leaflet-tile-container leaflet-zoom-animated"
                                            style="z-index: 19; transform: translate3d(127px, 118px, 0px) scale(1);">
                                            <img alt="" role="presentation"
                                                src="https://c.tile.openstreetmap.org/13/6552/4238.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(40px, -192px, 0px); opacity: 1;"><img
                                                alt="" role="presentation"
                                                src="https://a.tile.openstreetmap.org/13/6552/4239.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(40px, 64px, 0px); opacity: 1;"><img
                                                alt="" role="presentation"
                                                src="https://b.tile.openstreetmap.org/13/6551/4238.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(-216px, -192px, 0px); opacity: 1;"><img
                                                alt="" role="presentation"
                                                src="https://a.tile.openstreetmap.org/13/6553/4238.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(296px, -192px, 0px); opacity: 1;"><img
                                                alt="" role="presentation"
                                                src="https://c.tile.openstreetmap.org/13/6551/4239.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(-216px, 64px, 0px); opacity: 1;"><img
                                                alt="" role="presentation"
                                                src="https://b.tile.openstreetmap.org/13/6553/4239.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(296px, 64px, 0px); opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                                <div class="leaflet-pane leaflet-shadow-pane"></div>
                                <div class="leaflet-pane leaflet-overlay-pane"><svg pointer-events="none"
                                        class="leaflet-zoom-animated" width="890" height="456"
                                        viewBox="-150 -38 890 456" style="transform: translate3d(-150px, -38px, 0px);">
                                        <g>
                                            <path class="leaflet-interactive" stroke="#FF0000" stroke-opacity="1"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                fill="#8888dd" fill-opacity="0.5" fill-rule="evenodd"
                                                d="M229 110L246 111L240 127L236 176L232 189L222 200L199 244L197 249L198 253L195 254L195 256L191 256L196 289L249 288L251 286L257 285L261 277L258 269L253 264L248 264L242 258L243 253L250 247L258 248L266 253L268 259L272 260L280 256L281 257L284 255L288 255L288 257L290 257L288 259L292 261L293 265L298 264L299 267L303 262L306 263L307 260L312 260L312 258L317 254L319 248L323 247L328 241L334 239L340 241L339 247L344 248L348 243L355 239L352 232L354 224L358 218L360 207L368 199L376 201L378 188L388 183L400 172L380 160L365 155L344 142L326 128L304 117L297 109L286 100L283 100L271 94L269 94L264 101L253 100L238 94L235 91L233 96zM288 188L287 189z">
                                            </path>
                                        </g>
                                    </svg></div>
                                <div class="leaflet-pane leaflet-marker-pane"></div>
                                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                <div class="leaflet-pane leaflet-popup-pane"></div>
                                <div class="leaflet-proxy leaflet-zoom-animated"
                                    style="transform: translate3d(1.67744e+06px, 1.08519e+06px, 0px) scale(4096);">
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
                                                            class="leaflet-control-layers-selector"
                                                            name="leaflet-base-layers" checked="checked"><span>
                                                            OpenStreetMap</span></div>
                                                </label><label>
                                                    <div><input type="radio" class="leaflet-control-layers-selector"
                                                            name="leaflet-base-layers"><span> OpenStreetMap
                                                            H.O.T.</span></div>
                                                </label><label>
                                                    <div><input type="radio" class="leaflet-control-layers-selector"
                                                            name="leaflet-base-layers"><span> Mapbox
                                                            Streets</span></div>
                                                </label><label>
                                                    <div><input type="radio" class="leaflet-control-layers-selector"
                                                            name="leaflet-base-layers"><span> Mapbox
                                                            Satellite</span></div>
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
                                    <div class="leaflet-control-attribution leaflet-control"><a
                                            href="http://leafletjs.com"
                                            title="A JS library for interactive maps">Leaflet</a> | <a
                                            href="https://openstreetmap.org/copyright">© OpenStreetMap</a> | <a
                                            href="https://github.com/OpenSID/OpenSID">OpenSID</a></div>
                                </div>
                            </div>
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
                var baseLayers = getBaseLayers(wilayah_desa, '<?= $this->setting->mapbox_key; ?>');
                L.control.layers(baseLayers, null, {
                    position: 'topright',
                    collapsed: true
                }).addTo(wilayah_desa);

                //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
                <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
                var kantor_desa = L.marker(posisi).addTo(wilayah_desa);
                <?php endif; ?>

                var polygon_desa = [
                    [
                        [
                            [-6.259416, 107.940411],
                            [-6.259541, 107.943256],
                            [-6.262286, 107.942215],
                            [-6.270628, 107.94154],
                            [-6.272828, 107.940901],
                            [-6.274738, 107.939107],
                            [-6.282194, 107.935235],
                            [-6.282749, 107.93509],
                            [-6.282987, 107.934786],
                            [-6.283761, 107.934954],
                            [-6.283845, 107.934564],
                            [-6.284195, 107.934551],
                            [-6.284273, 107.933738],
                            [-6.289898, 107.934631],
                            [-6.2897342827115486, 107.94370204210283],
                            [-6.289425019227147, 107.94414192438127],
                            [-6.289361033655671, 107.94428944587709],
                            [-6.289358367590021, 107.94446378946306],
                            [-6.289403690704186, 107.94476419687273],
                            [-6.289358367590021, 107.9449036717415],
                            [-6.289147, 107.94517],
                            [-6.288689184679783, 107.94553399086],
                            [-6.288403915209188, 107.94567346572877],
                            [-6.288267945593355, 107.94567346572877],
                            [-6.2881159795100485, 107.94561177492143],
                            [-6.287972011600703, 107.94562786817552],
                            [-6.287900027631076, 107.94572710990907],
                            [-6.287809381136621, 107.94580221176147],
                            [-6.287692073885061, 107.94572979211809],
                            [-6.287585430906124, 107.9457324743271],
                            [-6.2874707896793876, 107.94580757617952],
                            [-6.287396139564672, 107.94579148292543],
                            [-6.2873321537435105, 107.94575929641725],
                            [-6.286877587579153, 107.94552996754648],
                            [-6.286504336472644, 107.94535830616952],
                            [-6.28645634702523, 107.94531270861629],
                            [-6.286425687098169, 107.94523626565935],
                            [-6.2856951804755665, 107.94464349746706],
                            [-6.285551211896066, 107.94448792934419],
                            [-6.285599201427002, 107.9441821575165],
                            [-6.285492558018932, 107.94394075870514],
                            [-6.285625862275594, 107.94365644454957],
                            [-6.285513886702294, 107.94341504573823],
                            [-6.284970005003381, 107.94304490089417],
                            [-6.284783378799201, 107.9429215192795],
                            [-6.284525, 107.942647],
                            [-6.284404794007908, 107.94255673885347],
                            [-6.284143517019454, 107.94255137443544],
                            [-6.283927, 107.942589],
                            [-6.283812921458268, 107.94275522232057],
                            [-6.283562308554176, 107.94282495975496],
                            [-6.283492990070028, 107.94302880764009],
                            [-6.283306363336055, 107.94313073158266],
                            [-6.283135733120699, 107.94318437576295],
                            [-6.283025090060528, 107.94331580400468],
                            [-6.282910447828788, 107.94358134269716],
                            [-6.282846461455914, 107.94377848505974],
                            [-6.282707824287673, 107.94394612312318],
                            [-6.282709157337539, 107.94422239065172],
                            [-6.282663833640035, 107.94447720050813],
                            [-6.282709157337539, 107.94471055269243],
                            [-6.282805136919241, 107.94494390487672],
                            [-6.282855792802446, 107.945174574852],
                            [-6.282946440160078, 107.94527113437654],
                            [-6.283018424815191, 107.94530063867572],
                            [-6.283071746775509, 107.94536232948305],
                            [-6.283151729705763, 107.94556617736818],
                            [-6.283215716041106, 107.94573113322261],
                            [-6.2834836587349185, 107.94616430997851],
                            [-6.2836062991258625, 107.94638693332674],
                            [-6.283776929186911, 107.94663101434709],
                            [-6.283834250210482, 107.94667929410936],
                            [-6.283888905134066, 107.94669538736346],
                            [-6.284038, 107.946688],
                            [-6.284176843173241, 107.94668063521388],
                            [-6.284247494612209, 107.94668868184091],
                            [-6.284314146904325, 107.94672086834909],
                            [-6.284518102865174, 107.94690459966662],
                            [-6.284695397851151, 107.94701993465425],
                            [-6.284775380531808, 107.94708967208864],
                            [-6.2847980422890934, 107.94712856411935],
                            [-6.2847980422890934, 107.94718354940416],
                            [-6.284755384862792, 107.94737666845323],
                            [-6.284767382264288, 107.94749200344087],
                            [-6.284832701445382, 107.94759795069695],
                            [-6.284880691042589, 107.9476583003998],
                            [-6.284910018016485, 107.94773340225221],
                            [-6.284886023219777, 107.94789031147958],
                            [-6.2848167049119965, 107.947965413332],
                            [-6.284630078652818, 107.94796675443652],
                            [-6.28462341342804, 107.94804587960245],
                            [-6.284655406506211, 107.94814780354501],
                            [-6.284674069134228, 107.9482711851597],
                            [-6.284634077787647, 107.94841736555101],
                            [-6.2845660924914, 107.94854208827022],
                            [-6.284542097678841, 107.94860377907754],
                            [-6.28449944023156, 107.94864267110827],
                            [-6.284398128780241, 107.94870972633363],
                            [-6.284352805229844, 107.94876873493195],
                            [-6.2843488060928525, 107.94884517788888],
                            [-6.284330143453169, 107.94895783066751],
                            [-6.284322145178817, 107.9490825533867],
                            [-6.284338141727406, 107.94920727610591],
                            [-6.284382132233497, 107.94934004545215],
                            [-6.284359470458095, 107.94947281479837],
                            [-6.28428748598851, 107.94957876205446],
                            [-6.284184841449832, 107.94967800378801],
                            [-6.284144850065644, 107.94975310564043],
                            [-6.284150182250377, 107.94985100626948],
                            [-6.2842408293825205, 107.9499824345112],
                            [-6.284282153805176, 107.9500722885132],
                            [-6.2842741555300865, 107.95014202594759],
                            [-6.284234164152768, 107.95020237565042],
                            [-6.2841701779426495, 107.95029893517496],
                            [-6.284142183973252, 107.95035794377328],
                            [-6.284154181388895, 107.9504330456257],
                            [-6.2842234997849555, 107.95049607753755],
                            [-6.28428881903433, 107.95050814747812],
                            [-6.284356804366809, 107.95051753520966],
                            [-6.284398128780241, 107.95053698122503],
                            [-6.284424789690396, 107.9505778849125],
                            [-6.284428122304064, 107.95064292848112],
                            [-6.284401461394087, 107.9507052898407],
                            [-6.284381465710695, 107.95078575611116],
                            [-6.284392130075276, 107.95081324875358],
                            [-6.284420790553952, 107.95083269476893],
                            [-6.284453450167278, 107.9508387297392],
                            [-6.284484110210582, 107.9508347064257],
                            [-6.28453209983995, 107.95080520212652],
                            [-6.2845474298595025, 107.95075893402101],
                            [-6.284606083843211, 107.95067712664607],
                            [-6.284643409102119, 107.95060604810716],
                            [-6.284687399582397, 107.95055776834491],
                            [-6.284800708378114, 107.95051619410515],
                            [-6.284910018016485, 107.95052424073221],
                            [-6.284982002399928, 107.95060604810716],
                            [-6.2850366572029435, 107.95078441500664],
                            [-6.285099310262741, 107.95092254877093],
                            [-6.28513930157356, 107.95105531811716],
                            [-6.285176626794214, 107.95112773776054],
                            [-6.285273938964042, 107.9511921107769],
                            [-6.285445901521031, 107.95124441385272],
                            [-6.285532549299511, 107.95125313103202],
                            [-6.285639192699387, 107.95125514268878],
                            [-6.2856738517996344, 107.95125849545002],
                            [-6.285711176981943, 107.95127525925638],
                            [-6.285761832582206, 107.95131213963035],
                            [-6.285799824279161, 107.95135706663133],
                            [-6.285828484680295, 107.95141540467739],
                            [-6.285824485554652, 107.95146703720094],
                            [-6.285759166498096, 107.9516038298607],
                            [-6.285675184841906, 107.95170575380327],
                            [-6.285639192699387, 107.95190691947938],
                            [-6.285655189207481, 107.95215502381326],
                            [-6.285691181348892, 107.95222476124765],
                            [-6.285752501287783, 107.95227840542795],
                            [-6.285997780971069, 107.9523092508316],
                            [-6.2860444374194815, 107.9523454606533],
                            [-6.286067099121476, 107.9523950815201],
                            [-6.286035106130135, 107.95249164104463],
                            [-6.285956456684707, 107.95262038707733],
                            [-6.285852479433531, 107.952738404274],
                            [-6.285729839572073, 107.9528269171715],
                            [-6.285564542321767, 107.95292347669603],
                            [-6.285499223232578, 107.95289799571037],
                            [-6.285440569349567, 107.95288994908334],
                            [-6.285383248502975, 107.95293152332307],
                            [-6.2853512554695605, 107.95300394296649],
                            [-6.285340591124661, 107.95310586690904],
                            [-6.28536725198651, 107.95322656631471],
                            [-6.285431238049394, 107.95341700315477],
                            [-6.2854272389206844, 107.9534921050072],
                            [-6.285391246761017, 107.95356988906862],
                            [-6.285287269396855, 107.95363426208498],
                            [-6.285156631140617, 107.9536557197571],
                            [-6.285057985904994, 107.95367985963824],
                            [-6.284999331972239, 107.95377373695375],
                            [-6.284980669355888, 107.95395076274873],
                            [-6.285052653729561, 107.954181432724],
                            [-6.285119305918538, 107.95434504747392],
                            [-6.285084646781333, 107.95444160699846],
                            [-6.284975337179667, 107.95453280210498],
                            [-6.28481003968961, 107.95455962419511],
                            [-6.2846927317615835, 107.95457303524019],
                            [-6.284546096814344, 107.95456230640413],
                            [-6.284447451462949, 107.95461326837541],
                            [-6.284370134823108, 107.95471787452699],
                            [-6.283942, 107.955408],
                            [-6.282875, 107.955817],
                            [-6.282767, 107.956525],
                            [-6.282527, 107.956525],
                            [-6.281676, 107.957351],
                            [-6.281524, 107.958122],
                            [-6.281412, 107.958426],
                            [-6.28131, 107.958568],
                            [-6.28163, 107.959301],
                            [-6.282667, 107.959199],
                            [-6.282901, 107.95955],
                            [-6.282924, 107.960076],
                            [-6.282583, 107.960461],
                            [-6.282045, 107.960699],
                            [-6.281793, 107.961156],
                            [-6.281565, 107.961628],
                            [-6.281333, 107.96191],
                            [-6.28105, 107.961746],
                            [-6.280195, 107.961467],
                            [-6.279587, 107.961539],
                            [-6.278766, 107.961856],
                            [-6.278046, 107.962272],
                            [-6.277682, 107.962547],
                            [-6.277153, 107.962666],
                            [-6.276147, 107.962687],
                            [-6.27586, 107.962792],
                            [-6.275163, 107.963595],
                            [-6.274564, 107.964179],
                            [-6.27462, 107.964601],
                            [-6.274884, 107.965187],
                            [-6.274837, 107.965561],
                            [-6.274603, 107.965646],
                            [-6.273276, 107.965762],
                            [-6.272682, 107.965989],
                            [-6.272141, 107.966975],
                            [-6.271792, 107.967707],
                            [-6.271002, 107.968441],
                            [-6.270711, 107.96897],
                            [-6.2703, 107.969448],
                            [-6.269953, 107.969655],
                            [-6.269737, 107.969472],
                            [-6.269591, 107.969336],
                            [-6.268363, 107.967067],
                            [-6.268243, 107.966693],
                            [-6.267953, 107.966584],
                            [-6.267877, 107.966245],
                            [-6.267874, 107.965942],
                            [-6.267262, 107.964294],
                            [-6.26698, 107.963688],
                            [-6.265259, 107.961105],
                            [-6.264799, 107.960067],
                            [-6.26364, 107.958721],
                            [-6.262665, 107.957478],
                            [-6.262402, 107.956912],
                            [-6.261172, 107.954503],
                            [-6.260513, 107.953195],
                            [-6.260167, 107.952734],
                            [-6.259751, 107.952561],
                            [-6.259219, 107.951958],
                            [-6.25836, 107.950722],
                            [-6.257986, 107.950368],
                            [-6.257702, 107.950096],
                            [-6.257542, 107.949582],
                            [-6.257319, 107.949034],
                            [-6.256871, 107.948492],
                            [-6.256595, 107.947609],
                            [-6.256647, 107.947161],
                            [-6.25685, 107.947002],
                            [-6.257456, 107.946761],
                            [-6.257717, 107.946285],
                            [-6.25771, 107.945505],
                            [-6.257547, 107.944472],
                            [-6.257278, 107.943812],
                            [-6.257031, 107.943063],
                            [-6.256827, 107.942494],
                            [-6.256532, 107.941947],
                            [-6.256424, 107.941755],
                            [-6.256357, 107.941558],
                            [-6.256226, 107.941558],
                            [-6.256091, 107.941319],
                            [-6.256952, 107.941092]
                        ]
                    ],
                    [
                        [
                            [-6.272642358969023, 107.95040808064485],
                            [-6.272701040097289, 107.95051533108978],
                            [-6.272816401841539, 107.95047444185766],
                            [-6.272796396916626, 107.95045098082282],
                            [-6.272745050939147, 107.9503417194321]
                        ]
                    ]
                ];
                var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(
                    wilayah_desa);
                wilayah_desa.fitBounds(kantor_desa.getBounds());
            </script>
        </div>
    </div>
</div>