<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php $this->load->view("$folder_themes/partials/copyright.php"); ?>
</div>
<div class="float-sm">
<?php foreach ($sosmed As $data): ?>
		<div class="fl-fl float-<?= strtolower($data['nama']) ?>">
			<i id="icon" class="fa fa-<?= strtolower($data['nama']) ?>"></i>
			<a href="<?= $data['link']?>" target="_blank" style="color: white;"> <?= $data['nama'] ?></a>
		</div>
	<?php endforeach; ?>
</div>
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JQUERY JS -->
<!-- BOOTSTRAP JS -->
<script src="<?= base_url('assets/mytheme/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- RATING JS-->
<script src="<?= base_url('assets/mytheme/plugins/rating/jquery.rating-stars.js'); ?>"></script>
<!-- SPARKLINE JS-->
<script src="<?= base_url('assets/mytheme/js/jquery.sparkline.min.js'); ?>"></script>
<!-- CUSTOM SCROLLBAR JS-->
<script src="<?= base_url('assets/mytheme/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<!-- SIDE-MENU JS -->
<script src="<?= base_url('assets/mytheme/plugins/horizontal-menu/horizontal-menu.js'); ?>"></script>
<script src="<?= base_url('assets/mytheme/plugins/sidemenu/sidemenu.js'); ?>"></script>
<!-- SIDEBAR JS -->
<script src="<?= base_url('assets/mytheme/plugins/sidebar/sidebar.js'); ?>"></script>
<!-- STICKY JS -->
<script src="<?= base_url('assets/mytheme/js/stiky.js'); ?>"></script>
<!-- BLOCK UI -->
<script src="<?= base_url('assets/mytheme/plugins/block-ui/jquery.block-ui.js'); ?>"></script>
<!-- SWEET-ALERT JS -->
<script src="<?= base_url('assets/mytheme/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>
<!--Mobile Detect -->
<script src="<?= base_url('assets/mytheme/js/mobile-detect.min.js'); ?>"></script>
<!--CUSTOM JS -->
<script src="<?= base_url('assets/mytheme/js/custom-01.js'); ?>"></script>
<!--- TABS JS -->
<script src="<?= base_url('assets/mytheme/js/jquery.multipurpose_tabcontent.js'); ?>"></script>
<script src="<?= base_url('assets/mytheme/js/tab-content.js'); ?>"></script>
<!-- DATA TABLE JS-->
<script src="<?= base_url('assets/mytheme/plugins/datatable/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/mytheme/plugins/datatable/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/mytheme/plugins/datatable/datatable.js'); ?>"></script>
<script src="<?= base_url('assets/mytheme/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
<script>
	$('#clear-input').on('click', function() {
        $('#cari_daftar').val('');
        filterName();
        filterArsip();
    })
	function filterName() {

		var input, filter, ul, a, i, txtValue, divParent;
		input = document.getElementById("cari_daftar");
		filter = input.value.toUpperCase();
		ul = document.getElementById("ul-daftar");

		divParent = ul.getElementsByClassName("parent-list");
		for (i = 0; i < divParent.length; i++) {
			a = divParent[i].getElementsByTagName("div")[0];
			txtValue = a.textContent || a.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				divParent[i].style.display = "";
			} else {
				divParent[i].style.display = "none";
			}
		}
	}

		function filterArsip() {

		var input, filter, ul, a, i, txtValue, divParent;
		input = document.getElementById("cari_daftar");
		filter = input.value.toUpperCase();
		ul = document.getElementById("ul-daftar");

		divParent = ul.getElementsByClassName("parent-list");
		for (i = 0; i < divParent.length; i++) {
			a = divParent[i].getElementsByTagName("div")[0];
			txtValue = a.textContent || a.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				divParent[i].style.display = "";
			} else {
				divParent[i].style.display = "none";
			}
		}
		}

		$('#Jump').on('click', function() {

		const id = 'divFirst';
		const yOffset = -55;
		const element = document.getElementById(id);
		const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
		$("html, body").animate({
			scrollTop: y
		}, 600);
		return false;
		})

		$(document).on("click", "#back-to-top2", function(e) {
		$('.CardPengaduan').removeClass('card-collapsed');
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		if ($('#cari_daftar').val() != '') {
			$('#cari_daftar').val('');
			filterName();
			filterArsip();

		}

		return false;
		});
	function showLoader() {
		$.blockUI({
			css: {
				backgroundColor: 'transparent',
				border: 'none',
			},
			message: '<div class="dimmer active"><div class="lds-hourglass"></div></div>'
		});
	};
	$(document).ajaxComplete(function() {
		$.unblockUI();
	}).ajaxSuccess(function() {
		$.unblockUI();
	}).ajaxStop(function() {
		$.unblockUI();
	}).ajaxError(function() {
		$.unblockUI();
	});
</script>
<script type="text/javascript">
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
  }
</script>
<script>
	$(document).ready(function () {
		if ($("#statistik").length) {
			const a = "<?= config_item('dashboard_info') ?>",
				l = `api/info-dashboard`;
			try {
				$.ajax({
					url: a + l,
					type: "get",
					dataType: "json",
					crossDomain: !0,
					success: function (a) {
						$("[data-name=jmlpenduduk]").html(`<span>${a.data.penduduk}</span>`)
						$("[data-name=kk]").html(`<span>${a.data.keluarga}</span>`)
						$("[data-name=laki-laki]").html(`<span>${a.data.male}</span>`)
						$("[data-name=perempuan]").html(`<span>${a.data.female}</span>`)
						$("[data-name=permohonansurat]").html(`<span>${a.data.totalpermohonansurat} Dokumen</span>`)
						$("[data-name=belumlengkap]").html(`<span>${a.data.statuspermohonansurat.belumlengkap}</span>`)
						$("[data-name=sudahdiambil]").html(`<span>${a.data.statuspermohonansurat.sudahdiambil}</span>`)
						$("[data-name=sedangdiperiksa]").html(`<span>${a.data.statuspermohonansurat.sedangdiperiksa}</span>`)
						$("[data-name=siapdiambil]").html(`<span>${a.data.statuspermohonansurat.siapdiambil}</span>`)
						$("[data-name=dibatalkan]").html(`<span>${a.data.statuspermohonansurat.dibatalkan}</span>`)
						$("[data-name=jabatan]").html(`<span>${a.data.infokepalaDesa.jabatan}</span>`)
						$("[data-name=foto]").html(`<img src="<?= site_url(); ?>desa/upload/user_pict/${a.data.infokepalaDesa.foto}" >`)
						$("[data-name=kades]").html(`<span>${a.data.infokepalaDesa.nama}, ${a.data.infokepalaDesa.gelar_belakang}</span>`)
						$("[data-name=surattercetak]").html(`<span style="color: black; font-size: 9px;">SURAT TERCETAK</span><p style="color: black;margin-top: -5px;">${a.data.surattercetak}</p>`)
						$("[data-name=pendaftaran]").html(`<span style="color: black; font-size: 9px;">VERVAL MANDIRI</span><p style="color: black;margin-top: -5px;">${a.data.pendaftaran}</p>`)
						$("[data-name=ibuhamil]").html(`<span style="color: black; font-size: 9px;">IBU HAMIL</span><p style="color: black;margin-top: -5px;">${a.data.ibuhamil}</p>`)
						$("[data-name=dusun]").html(`<span style="color: black; font-size: 9px;">JUMLAH DUSUN</span><p style="color: black;margin-top: -5px;">${a.data.dusun}</p>`)
						$("[data-name=ebook]").html(`<span style="color: black; font-size: 9px;">BUKU TAMU</span><p style="color: black;margin-top: -5px;">${a.data.rekapbukutamu}</p>`)
					},
					error: function (a) {
						$(".box-shalat").html(
							'<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'
							), $(".box-shalat").removeClass("shimmer")
					}
				})
			} catch (a) {
				console.log(a)
			}
		}
	});
</script>
<script>
    $(document).ready(function () {
        fill_datatable();
        function fill_datatable() {
            var dataTable = $('#statistik-list-surat').DataTable({
                'paging': true,
                'pageLength': 5,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'processing': true,
                'serverSide': true,
                "responsive": true,
                "language": {
                    "emptyTable": "Tidak ada data yang dapat ditampilkan"
                },
                ajax: {
                    url: "<?= config_item('daftar_permohonan_surat') ?>",
                },
                columns: [
					{
                        data: 'status',
                        name: 'permohonan_surat.status',
						render: function (data) {
                            if (data == 0) {
                                return 'Belum Lengkap';
                            } else if(data == 1) {
                                return 'Sedang Diperiksa';
                            }else if(data == 2) {
                                return 'Menunggu Tandatangan';
                            }else if(data == 3) {
                                return 'Siap Diambil';
                            }else if(data == 4) {
                                return 'Sudah Diambil';
                            }else if(data == 5) {
                                return 'Dibatalkan';
                            }

                        },
                    },
					{
                        data: 'no_antrian',
                        name: 'permohonan_surat.no_antrian'
                    },
					{
                        data: 'jenis_surat',
                        name: 'tweb_surat_format.nama'
                    },
					{
                        data: 'nama_penduduk',
                        name: 'tweb_penduduk.nama'
                    },
					{
                        data: 'tgl_terdaftar',
                        name: 'permohonan_surat.created_at'
                    },
                  
                ],
            });
        }
		fill_datatable_log_surat();
        function fill_datatable_log_surat() {
            var dataTable = $('#statistik-list-log-surat').DataTable({
                'paging': true,
                'pageLength': 5,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'processing': true,
                'serverSide': true,
                "responsive": true,
                "language": {
                    "emptyTable": "Tidak ada data yang dapat ditampilkan"
                },
                ajax: {
                    url: "<?= config_item('log_surat_anjungan') ?>",
                },
                columns: [
					{
                        data: 'jenis_surat',
                        name: 'tweb_surat_format.nama'
                    },
					{
                        data: 'nama_penduduk',
                        name: 'tweb_penduduk.nama'
                    },
					{
                        data: 'keterangan',
                        name: 'log_surat.keterangan'
                    },
					{
                        data: 'tgl_terdaftar',
                        name: 'log_surat.tanggal'
                    },
                  
                ],
            });
        }
    });
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
	$('.logo-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 2000,
		infinite: true
	});
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>
