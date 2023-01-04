<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<div class="row pt-5" id="user-profile">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="wideget-user">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
              <div class="wideget-user-desc row">
                <div class="col-2 mt-0 p-0 text-right">
                  <img class="w-90 my-auto" src="<?= gambar_desa($desa['logo']);?>" alt="img">
                </div>
                <div class="user-wrap my-auto col-10 pt-0 mt-1">
                  <h6 class="text-muted mb-1 font-weight-bolder">
                    <?= ((strtoupper($this->setting->website_title)) ? ' ' . strtoupper($this->setting->website_title) : ''); ?>
                  </h6>
                  <h4 class="mb-1 font-weight-bolder">
                    <?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>
                  </h4>
                  <h4 class="mb-1 font-weight-bolder"><?= ucwords("Prov. ".$desa['nama_propinsi'])?>
                  </h4>
                  <p class="m-0">Alamat : <?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?>
                  </p>
                  <a href="<?php if (!empty($desa['email_desa'])): ?>Email: <?= $desa['email_desa']?><?php endif; ?>" class="btn btn-secondary mt-1 mb-1"><i
                      class="fa fa-envelope"></i> E-mail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top">
        <div class="wideget-user-tab">
          <div class="tab-menu-heading">
            <div class="tabs-menu1">
              <ul class="nav align-items-center">
                <li class=""><a href="#tab-51" class="show" data-toggle="tab">Tentang Kami</a></li>
                <li><a href="#tab-61" data-toggle="tab" class="">Pamong Desa</a></li>
                <li><a href="#tab-71" data-toggle="tab" class="">Galeri Foto</a></li>
                <li><a href="#tab-81" data-toggle="tab" class="">Link Terkait</a></li>
                <li><a href="#tab-map" data-toggle="tab" class="">Peta</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="border-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-51">
              <h4>Profil</h4>
              <div>Peraturan Bupati No.117 tahun 2016 mengatur Kedudukan, Susunan, Tugas dan Fungsi, Serta Tata Kerja
                Dinas Kependudukan dan Pencatatan Sipil sebagai berikut :</div>
              <div><span style="color: inherit; font-family: inherit; font-size: 1.125rem;"><br></span></div>
              <div><span style="color: inherit; font-family: inherit; font-size: 1.125rem;">Kedudukan</span><br></div>
              <div>Dinas Kependudukan dan Pencatatan Sipil merupakan unsur pelaksana Pemerintah Daerah di bidang
                Kependudukan dan Pencatatan Sipil yang dipimpin oleh Kepala Dinas dan berkedudukan di bawah dan
                bertanggungjawab kepada Bupati melalui Sekretaris Daerah.</div>
              <div><span style="color: inherit; font-family: inherit; font-size: 1.125rem;"><br></span></div>
              <div><span style="color: inherit; font-family: inherit; font-size: 1.125rem;">Tugas Pokok</span><br></div>
              <div>Dinas Kependudukan dan Pencatatan Sipil mempunyai tugas melaksanakan urusan rumah tangga Pemerintah
                Daerah dan tugas pembantuan di bidang Kependudukan dan Pencatatan Sipil.</div>
              <h4><br></h4>
            </div>

            <div class="tab-pane" id="tab-61">
              <ul class="widget-users row">
              <?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
                  <li class="col-lg-4  col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body text-center">
                      <span class="avatar avatar-xxl brround cover-image"
                        data-image-src="<?= $data['foto'] ?>"
                        style="background: url('<?= $data['foto'] ?>') center center;"></span>
                      <h4 class="h4 mb-0 mt-3"><?= $data['nama'] ?></h4>
                      <p class="card-text mb-0"><?= $data['jabatan'] ?></p>
                      <p class="card-text mb-0"><?= $data['status_kehadiran'] == 'hadir' ? 'Hadir' : 'Tidak dikantor' ?></p>
                    </div>
                    <div class="card-footer text-center">
                      <div class="row user-social-detail">
                        <div class="col-lg-4 col-sm-4 col-4">
                          <a href="#" target="_blank"><i class=" fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                          <a href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                          <a href="#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="tab-pane" id="tab-71">
              <div class="row">
                <?php foreach ($w_gal As $data): ?>
                <?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
                <div class="col-xs-12 col-sm-12 col-md-3 col-xl-3 border-bottom-0 pb-0">
                  <div class="card entry text-center mb-2">
                    <a data-fancybox="gallery" href="<?= AmbilGaleri($data['gambar'],'kecil')?>"
                      title="Album : <?= "$data[nama]" ?>">
                      <img class="mw-100 border" height="200" loading="lazy"
                        src="<?= AmbilGaleri($data['gambar'],'kecil')?>">
                    </a>
                    <a class="btn btn-sm btn-purple pink-gradient"
                      href="<?= site_url("first/sub_gallery/{$data['id']}") ?>" title="Album : Hidden">Lihat Album</a>
                  </div>
                </div>
                <div class="clearboth"></div>
                <?php endif; ?>
                <?php endforeach; ?>

              </div>
            </div>
            <div class="tab-pane" id="tab-81">
              <div class="row">
                <?php foreach ($sosmed As $data): ?>
                <?php if (!empty($data["link"])): ?>
                <div class=" col-lg-6 col-md-12">
                  <div class="card borderover-flow-hidden m-1">
                    <div class="media card-body media-xs overflow-visible">
                      <img class="mr-3 h-100" src="<?= base_url().'assets/front/'.$data['gambar'] ?>"
                        alt="Portal Informasi Pemkab Lampung Selatan">
                      <div class="valign-middle">
                        <h4 class="p-0 m-0 font-weight-semibold text-dark"><?= $data['nama'] ?></h4>
                        <p class="text-muted mb-1"><?= $data['nama'] ?></p>
                        <a href="<?= $data['link']?>" target="_blank" class="mt-0 btn btn-sm btn-primary"
                          type="button">Kunjungi Situs</a>
                        </button>
                      </div>
                      <div class="media-body valign-middle text-right overflow-visible mt-2">
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="tab-pane" id="tab-map">
              <div class="row">
                <div style="width: 100%">
                  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.779178310282!2d108.0322642459589!3d-6.422412278350851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6935ba8a08627d%3A0x88334988390b9310!2skantor%20desa%20drunten%20kulon!5e0!3m2!1sid!2sid!4v1672551493314!5m2!1sid!2sid"></iframe>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- COL-END -->
</div>