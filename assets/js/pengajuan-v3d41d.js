$(document).ready(function () {

	function disable_elem($id) {
		var elem = document.getElementById($id);
		if (elem) {
			elem.removeAttribute("enabled", "");
			elem.setAttribute("disabled", "");
		}
	};

	function enable_elem($id) {
		var elem = document.getElementById($id);
		if (elem) {
			elem.removeAttribute("disabled", "");
			elem.setAttribute("enabled", "");
		}
	};

	function AlertError($title, $text) {
		swal({
			title: $title,
			text: $text,
			type: "error",
			showCancelButton: false,
			confirmButtonText: "Ok"
		});
	};


	jQuery.validator.addMethod("emailValid",
		function (emailValid, element) {
			return this.optional(element) || emailValid.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i);
		},
		"Alamat Email Tidak Valid"
	);

	$('.fc-datepicker').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		maxDate: 0,
		dateFormat: "dd-mm-yy",
		onSelect: function (dateText, inst) {
			$('.fc-datepicker').valid();
		}
	}).mask('00-00-0000');
	
	$('.yanduk-datepicker').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		maxDate: 60,
		minDate: 1,
		dateFormat: "dd-mm-yy",
		onSelect: function (dateText, inst) {
			$('.yanduk-datepicker').valid();
		},
		beforeShowDay: function(date){
			var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
			return [ disabledDates.indexOf(string) == -1 ]
		}
	}).mask('00-00-0000');


	$('#no_skpwni').mask('SSSSSS/0000/00000000/0000', {
		selectOnFocus: true,
		placeholder: "SKPWNI/xxxx/xxxxxxxx/xxxx"
	});

	jQuery.validator.addMethod("format_tgl",
		function (format_tgl, element) {
			var dateMomentObject = moment(format_tgl, "DD-MM-YYYY", true);
			var dateObject = dateMomentObject.toDate();
			var curDate = new Date();
			var inputDate = new Date(dateObject);
			var IsDate = dateMomentObject.isValid();
			if (IsDate) {
				if (inputDate < curDate)
					return this.optional(element) || format_tgl.match(/^(0[1-9]|[12][0-9]|3[01])[- -.](0[1-9]|1[012])[- -.](19|20)\d\d$/i);
				return false;
			}
			return IsDate;
		}, "Input Tanggal/Bulan/Tahun Tidak Sesuai"
	);

	jQuery.validator.addMethod("yanduk_tgl",
		function (format_tgl, element) {
			var dateMomentObject = moment(format_tgl, "DD-MM-YYYY", true);
			var dateObject = dateMomentObject.toDate();
			var curDate = new Date();
			var inputDate = new Date(dateObject);
			var IsDate = dateMomentObject.isValid();
			if (IsDate) {

				if (inputDate > curDate)
				{
					return this.optional(element) || format_tgl.match(/^(0[1-9]|[12][0-9]|3[01])[- -.](0[1-9]|1[012])[- -.](19|20)\d\d$/i);
				}
				return false;
			}
			return IsDate;
		}, "Tanggal Tidak Sesuai/minimal 1 hari kedepan"
	);

	jQuery.validator.addMethod("format_telp",
		function (format_telp, element) {
			return this.optional(element) || format_telp.match(/^([0-9])\d{10,}$/i);
		},
		"Input Nomor Handphone di tidak Valid"
	);

	jQuery.validator.addMethod("format_skpwni",
		function (format_skpwni, element) {
			return this.optional(element) || format_skpwni.match(/^(SKPWNI)([\/])(\d{4})([\/])(\d{8})([\/])(\d{4})$/i);
		},
		"Nomor SKPWNI Tidak Sesuai, ex : SKPWNI/xxxx/xxxxxxxx/xxxx"
	);

	jQuery.validator.addMethod("lettersonly", function (value, element) {
		return this.optional(element) || /^[a-zA-Z\s'.,]*$/i.test(value);
	}, "Nama Hanya Huruf tidak Boleh ada Angka");

	jQuery.validator.setDefaults({
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('font-italic p-0 mb-0 invalid-feedback');
			element.closest('.input-validate').append(error);
			element.parent('.dropify-wrapper').find('.dropify-message').append(error);
			element.parent('.dropify-wrapper').find('.dropify-message').find(error).addClass('font-weight-bolder text-danger');
			element.parent('.dropify-wrapper').find('.dropify-message').find(error).removeClass('font-italic');
		},
		highlight: function (element, errorClass, validClass) {
			$(element).parent('.dropify-wrapper').addClass('has-error');
			// $(element).parent().parent().parent('ul').removeClass('bg-green');
			// $(element).parent().parent().parent('ul').addClass('bg-danger');
			$(element).addClass('is-invalid state-invalid');
			$(element).removeClass('is-valid state-valid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).parent('.dropify-wrapper').removeClass('has-error');
			// $(element).parent().parent().parent('ul').addClass('bg-green');
			// $(element).parent().parent().parent('ul').removeClass('bg-danger');
			$(element).removeClass('is-invalid state-invalid');
			$(element).addClass('is-valid state-valid');
		}
	});

	// $('#tabVerifikasi').hide();


	$('#surat-ver ').dropify({
		AutoUploads: true,
		PostData: URIPostImage,
		messages: {
			"default": "<span  class='m-0 p-0'>Klik Untuk Upload",
			'error': 'Error...!!!'
		},
		tpl: {
			preview: '<div class="dropify-preview h-100"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"></div></div></div>',
			filename: '<p class="dropify-filename d-lg-block d-none"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
			inputanDariUpload: '<input type="hidden" name="file_name_uploads"/>',
		}
	});

	$('.modalInputFile').each(function () {
		$(this).dropify({
			AutoUploads: true,
			PostData: URIPostImage,
			messages: {
				"default": "<span  class='m-0 p-0'>Klik Untuk Upload",
				'error': 'Error...!!!'
			},
			tpl: {
				preview: '<div class="dropify-preview h-100"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"></div></div></div>',
				filename: '<p class="dropify-filename d-lg-block d-none"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
				inputanDariUpload: '<input type="hidden" name="file_name_uploads"/>',
			}
		});
	});

	$('#verifikasi').on('change', function () {

		if ($(this).val() == 'yes')
			$('#tabVerifikasi').show();
		else
			$('#tabVerifikasi').hide();

	});


	$("#pengajuanKTP").validate({
		ignore: false,
		rules: {
			"nik": {
				number: true,
				required: true,
				minlength: 16,
			},
			"no_kk": {
				onfocusout: false,
				number: true,
				required: true,
				minlength: 16,
				cekKK: {
					cache: false,
					type: "POST",
					data: {
						nik: function () {
							return $('#nik').val();
						},
						alasan: function () {
							return $('#alasan').val();
						},
					},
					url: URLCekNik,
					beforeSend: function () {


						showLoader();
						if (__OpsiAmbil) {
							$('#container-jasa').html('');
							$('#opsi_ambil').val('0').trigger('change', ['changed']);
						}
						ResponseValidate = false;
						txtResponse = '';
						$('#nama_lgkp').val('');
						if ($('#email').val() != '' || $('#email').val() != '') {
							$('#email').val('');
							$('#no_telp').val('');
						};
						$('#email').attr('readonly', false);
						$('#no_telp').attr('readonly', false);
					},
					complete: function (AfterComplete) {

						if (AfterComplete.status != 200) {
							AlertError('Error', 'Terjadi Kesalahan... Coba Refresh Ulang...');
						} else {

							$alasan = $('#alasan').val();

							if (!ResponseValidate) {
								AlertError('Error', txtResponse.respText);
								if ($alasan != '104104102') {
									$('#nama_lgkp').val('');
									document.getElementById('desa').selectedIndex = 0;
									document.getElementById('kecamatan').selectedIndex = 0;
								}
							} else {
								if ($alasan != '104104102') {
									if (__UseApi) {
										$('#ModalCheckData').modal('show');
									}
								}
							}
						}
					}
				}
			},
			"captcha": {
				required: true,
				minlength: 5,
				remote: {
					url: base_url + "pengajuan/cek_captcha",
					type: "post"
				}
			},
			"nama_lgkp": {
				required: true,
				lettersonly: true
			},
			"no_telp": {
				required: true,
				number: true,
				minlength: 10,
				format_telp: true,
			},
			"email": {
				required: true,
				email: true,
				emailValid: true
			}
		},
		messages: {
			"nik": {
				required: "NIK tidak Boleh Kosong",
				number: "NIK Harap di Entri Hanya Angka",
				minlength: "NIK Harus 16 Digit",
			},
			"no_kk": {
				required: "Nomor KK tidak Boleh Kosong",
				number: "Nomor KK Harap di Entri Hanya Angka",
				minlength: "Nomor KK Harus 16 Digit",
				remote: "Data Form Belum Lengkap",

			},
			"alasan": {
				required: "Pilih salah satu Alasan"
			},
			"nama_lgkp": {
				required: "Nama Lengkap tidak Boleh Kosong",
				lettersonly: "Tidak boleh mengandung Angka / Simbol"
			},
			"kecamatan": {
				required: "Pilih salah satu Kecamatan"
			},
			"desa": {
				required: "Pilih salah satu Desa/Kelurahan"
			},
			"captcha": {
				remote: 'Kode Captcha Salah',
				required: "Kode Captcha tidak Boleh Kosong",
				minlength: "Kode Captcha 5 Digit",
			},
			"no_telp": {
				required: "Nomor Telfon Tidak Boleh Kosong",
				number: "Nomor Telfon Harap di Entri Hanya Angka",
				minlength: "Nomor Telfon Lebih dari 10 Digit",
			},
			"email": {
				required: "Alamat Email Tidak Boleh Kosong",
				email: "Alamat Email Tidak Valid"
			}
		},
		invalidHandler: function (event, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				$('.card').removeClass('card-collapsed');
			}
		},
		submitHandler: function (form, event) {

			if (!__dataEdit) {
				event.preventDefault();
				$('#MdlConfirm').modal('show');
				$('#BtnMdlSubmit').focus();
				$('#BtnMdlSubmit').click(function (e) {
					$("#global-loader").fadeIn("fast");
					$('#MdlConfirm').modal('hide');
					e.preventDefault();
					form.submit();
				});
			} else {
				$('#MdlConfirm').modal('show');



				$('#BtnMdlSubmit').click(function (e) {
					e.preventDefault();
					form.submit();
				});

			}

		}
	});

	addRuleFile();

	
	$("#tgl_kunjungan").rules("add", {
		required: true,
		yanduk_tgl: true,
		messages: {
			required: "Tanggal Permohonan Untuk dikunjungi tidak boleh kosong",
		}
	});

	$('#ModalCheckData').on('shown.bs.modal', function (e) {
		var elm__email = $('#email'),
			elm_notelp = $('#no_telp');
		_feedback = false;



		var _this = $(this),
			_inputTgl = $('#tgl_lhr_mdl'),
			_verified = txtResponse['verified'];
		_inputTgl.val('');


		var __data_error = {
			"tgl_lhr_mdl": "Tanggal Lahir Tidak Sesuai"
		};


		$("#formVerifikasiData").validate({
			rules: {
				"tgl_lhr_mdl": {
					required: true,
					format_tgl: true
				}
			},
			messages: {
				"tgl_lhr_mdl": {
					required: 'Tanggal Lahir atau Password Wajib di Isi'
				}
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.addClass('font-italic p-0 mb-0 invalid-feedback');
				$('.error-modal').html(error);
			},
			submitHandler: function (form, event) {
				event.preventDefault();
				var __dataPost = $(form).serialize();

				$.ajax({
					method: 'post',
					data: __dataPost,
					url: URICekTgl,
					beforeSend: function () {
						showLoader();
						elm__email.attr('data-email', '');
						elm__email.attr('data-notelp', '');
						$('#email_utama').attr('data-verified', 0);
					},
					success: function (data) {
						if (data.status == true) {
							nokecGet = nopropDefault + nokabDefault + data.no_kec;
							$('#kecamatan').val(nokecGet);
							$('#kecamatan_val').val(nokecGet);
							getDesa(nokecGet);
							nokelGet = nokecGet + data.no_kel;
							$('#desa_val').val(nokelGet);
							$('#nama_lgkp').val(data.nama);

							if (data.verified == 1) {
								elm__email.attr('data-email', data.email);
								elm__email.attr('data-notelp', data.no_telp);
								$('#email_utama').attr('data-verified', data.verified);
								// elm_notelp.val(data.no_telp).attr('readonly', true);
								// elm_notelp.val(data.no_telp).attr('readonly', true);
								// elm__email.val(data.email).attr('readonly', true);
								// document.getElementById('lay_mandiri').selectedIndex = 1;
							}
							_feedback = true;

							_this.modal('hide');


						} else {
							_form = $("#formVerifikasiData").validate();
							_form.showErrors(__data_error);
							_feedback = false;

						}
					}
				});
			}
		});
		$('#tgl_lhr_mdl').mask('00-00-0000').focus();

	}).on('hidden.bs.modal', function (e) {

		if (!_feedback) {
			$('#no_kk').removeData("previousValue").removeAttr("aria-invalid");
			// 	// ('#opsi_ambil').attr('disabled', true);
			// 	if (__OpsiAmbil)
			// 		disable_elem('opsi_ambil');

		}
		// else {
		// 	if (__OpsiAmbil)
		// 		enable_elem('opsi_ambil');
		// }
	});
	// 
	if (__UseApi) {
		UseApi();
	} else
		UnUsedApi();

	function UseApi() {
		pakaiAPI = true;
		nopropDefault = __noprop;
		nokabDefault = __nokab;
		$('#nama_lgkp').attr('readonly', true);
		disable_elem('kecamatan');


	}

	function UnUsedApi() {
		pakaiAPI = false;
		nopropDefault = '';
		nokabDefault = '';
		$('#nama_lgkp').attr('readonly', false);
		enable_elem('kecamatan');
	}
	
	if (__FormTambahan) {

		if (__FormTambahanDetail == 'perekaman') {


			if (__DataForm) {
				$('#id_loket').val(__DFidLoket);
				getTglRekam(__DFidLoket);
			}



			$("#id_tgl_rekam").rules("add", {
				required: true,
				messages: {
					required: "Harap Tanggal Perekaman",
				}
			});

			$("#id_loket").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Loket Perekaman",
				}
			});

			$('#id_loket').change(function (event) {
				event.preventDefault();
				var idLoket = $(this).val();
				getTglRekam(idLoket);
			});

			function getTglRekam(idLoket) {
				document.getElementById('id_tgl_rekam').selectedIndex = 0;
				$.ajax({
					method: 'post',
					data: {
						id_loket: idLoket
					},
					url: URITglRekam,
					beforeSend: function () {
						showLoader();
					},
					error: function () {

						swal({
							title: "Request Error..!!!",
							text: "Terjadi Kesalahan Saat Meminta Data...!!!",
							type: "error",
							showCancelButton: false,
							confirmButtonText: "OK",
						});
					},
					success: function (data) {
						for (i = 0, len = data.length, html_loket = '<option value="">-- Pilih Tanggal Perekaman</option>'; i < len; i++) {
							html_loket += '<option value="' + data[i]['id_tgl_rekam'] + '">' + data[i]['tanggal_lgkp'] + ' (Sisa Kuota ' + data[i]['sisa'] + ' Orang)</option>';
						}
						if (idLoket === "") {
							disable_elem('kecamatan');
							html_loket = '<option value="">-- Pilih Loket Terlebih dahulu</option>';
						} else {
							enable_elem('id_tgl_rekam');
						}
						$("#id_tgl_rekam").html(html_loket);

						if (__DataForm) {

							$('#id_loket').val(__DFid_tgl_rekam);
						}
					}
				});
			}
		} else if (__FormTambahanDetail == 'kia') {
			$("#nik_anak").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
					number: "NIK Harap di Entri Hanya Angka",
					required: "NIK Anak Tidak Boleh Kosong",

				}
			});

			$("#no_akta_lhr").rules("add", {
				minlength: 3,
				required: true,
				messages: {
					minlength: jQuery.validator.format("Nomor Akta Lahir Lebih {0} Digit"),
					required: "Nomor Akta Lahir Tidak Boleh Kosong",
				}
			});

			$("#no_kk_anak").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "Nomor KK Tidak Boleh Kosong",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit")
				}
			});

			$("#anak_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Urutan Anak Ke Harus Angka",
					required: "Urutan Anak Ke Tidak Boleh Kosong"
				}
			});

			$("#tgl_lahir").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir Anak tidak Boleh Kosong",
				}
			});

			$("#nama_anak").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Anak tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ayah").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir tidak Boleh Kosong",
					lettersonly: "Tempat Lahir boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ibu").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#jenis_lahir").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Jenis Kelahiran",
				}
			});

			$("#hub_pemohon").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Hubungan Pemohon",
				}
			});

		} else if (__FormTambahanDetail == 'akta_lahir') {
			$("#nik_anak").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
					number: "NIK Harap di Entri Hanya Angka",
				}
			});

			$("#no_kk_anak").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "Nomor KK Tidak Boleh Kosong",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit")
				}
			});

			$("#anak_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Urutan Anak Ke Harus Angka",
					required: "Urutan Anak Ke Tidak Boleh Kosong"
				}
			});

			$("#tgl_lahir").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir Anak tidak Boleh Kosong",
				}
			});

			$("#nama_anak").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Anak tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ayah").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir tidak Boleh Kosong",
					lettersonly: "Tempat Lahir boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ibu").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#jenis_lahir").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Jenis Kelahiran",
				}
			});

			$("#hub_pemohon").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Hubungan Pemohon",
				}
			});
		} else if (__FormTambahanDetail == 'akta_cerai') {

			$("#pengaju_cerai").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Yang Mengajukan Perceraian",
				}
			});

			$("#nomor_putusan").rules("add", {
				required: true,
				minlength: 5,
				messages: {
					required: "Di isi Nomor Putusan Pengadilan",
					minlength: jQuery.validator.format("Nomor Putusan Setidaknya lebih dari {0} Digit"),
				}
			});

			$("#no_kk_cerai").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "Di isi Nomor Kartu Keluarga Pasangan",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("Nomor Kartu Keluarga {0} Digit"),
				}
			});


			$("#tgl_cerai").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Putusan Pengadilan tidak Boleh Kosong",
				}
			});

			$("#sebab_cerai").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Sebab Perceraian",

				}
			});

			$("#no_akta_kawin_cerai").rules("add", {
				required: true,
				minlength: 5,
				messages: {
					required: "Di isi Nomor Akta Perkawinan",
					minlength: jQuery.validator.format("Nomor Akta Perkawinan Setidaknya lebih dari {0} Digit"),
				}
			});

			$("#tgl_kawin_cerai").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Akta Perkawinan tidak Boleh Kosong",
				}
			});

			$("#nik_suami").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir Suami tidak Boleh Kosong",
					lettersonly: "Tempat Lahir Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tgl_lahir_suami").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir tidak Boleh Kosong",
				}
			});


			$("#nik_ayah_suami").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ayah_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah dari Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nik_ibu_suami").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ibu_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu dari Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#cerai_suami_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Perceraian Suami ke- Hanya di Entri Hanya Angka",
					required: "Perceraian Suami ke- Tidak Boleh Kosong"
				}
			});

			$("#nik_istri").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir Istri tidak Boleh Kosong",
					lettersonly: "Tempat Lahir Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tgl_lahir_istri").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir tidak Boleh Kosong",
				}
			});


			$("#nik_ayah_istri").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ayah_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah dari Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nik_ibu_istri").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ibu_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu dari Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#cerai_istri_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Perceraian Istri ke- Hanya di Entri Hanya Angka",
					required: "Perceraian Istri ke- Tidak Boleh Kosong"
				}
			});
		} else if (__FormTambahanDetail == 'akta_kematian') {
			$("#hub_pemohon").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Hubungan Pemohon",
				}
			});

			$("#sebab_kematian").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Sebab Kematian",
				}
			});

			$("#nik_jenazah").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					required: "NIK Jenazah Harap di Isi",
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#no_kk_jenazah").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					required: "Nomor KK Jenazah Harap di Isi",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("Nomor KK Harus {0} Digit"),
				}
			});

			$("#nama_jenazah").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Jenazah tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir_jenazah").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir Jenazah tidak Boleh Kosong",
					lettersonly: "Tempat Lahir boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ayah").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_ibu").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_kematian").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Kematian tidak Boleh Kosong",
					lettersonly: "Tempat Kematian tidak Boleh mengandung Angka / Simbol"
				}
			});

			$("#anak_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Urutan Anak Harap di Entri Hanya Angka",
					required: "Urutan Anak Ke Tidak Boleh Kosong"
				}
			});

			$("#tgl_lahir_jenazah").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir Anak tidak Boleh Kosong",
				}
			});

			$("#tgl_mati_jenazah").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir Anak tidak Boleh Kosong",
				}
			});
		} else if (__FormTambahanDetail == 'akta_kawin') {


			$("#agama_kawin").rules("add", {
				required: true,
				messages: {
					required: "Harap Pilih Perkawinan Agama",
				}
			});

			$("#tgl_kawin").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Perkawinan tidak Boleh Kosong",
				}
			});

			$("#tempat_kawin").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Perkawinan tidak Boleh Kosong",
					lettersonly: "Tempat Perkawinan boleh mengandung Angka / Simbol"
				}
			});

			$("#nama_pemuka").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Pemuka Agama tidak Boleh Kosong",
					lettersonly: "Nama Pemuka Agama boleh mengandung Angka / Simbol"
				}
			});

			$("#nik_suami").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "NIK Suami Tidak Boleh Kosong",
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#no_kk_suami").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "Nomor KK Suami Tidak Boleh Kosong",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("Nomor KK Harus {0} Digit"),
				}
			});

			$("#nama_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir Suami tidak Boleh Kosong",
					lettersonly: "Tempat Lahir Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tgl_lahir_suami").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir tidak Boleh Kosong",
				}
			});


			$("#nik_ayah_suami").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ayah_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah dari Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nik_ibu_suami").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ibu_suami").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu dari Suami tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#kawin_suami_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Perceraian Suami ke- Hanya di Entri Hanya Angka",
					required: "Perceraian Suami ke- Tidak Boleh Kosong"
				}
			});

			$("#anak_ke_suami").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Anak ke- Hanya di Entri Hanya Angka",
					required: "Anak ke- Tidak Boleh Kosong"
				}
			});

			$("#nik_istri").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "NIK Istri Tidak Boleh Kosong",
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#no_kk_istri").rules("add", {
				required: true,
				number: true,
				minlength: 16,
				messages: {
					required: "Nomor KK Istri Tidak Boleh Kosong",
					number: "Nomor KK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("Nomor KK Harus {0} Digit"),
				}
			});

			$("#nama_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tempat_lahir_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Tempat Lahir Istri tidak Boleh Kosong",
					lettersonly: "Tempat Lahir Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#tgl_lahir_istri").rules("add", {
				required: true,
				format_tgl: true,
				messages: {
					required: "Tanggal Lahir tidak Boleh Kosong",
				}
			});


			$("#nik_ayah_istri").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ayah_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ayah dari Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#nik_ibu_istri").rules("add", {
				number: true,
				minlength: 16,
				messages: {
					number: "NIK Harap di Entri Hanya Angka",
					minlength: jQuery.validator.format("NIK Harus {0} Digit"),
				}
			});

			$("#nama_ibu_istri").rules("add", {
				required: true,
				lettersonly: true,
				messages: {
					required: "Nama Ibu dari Istri tidak Boleh Kosong",
					lettersonly: "Nama Tidak boleh mengandung Angka / Simbol"
				}
			});

			$("#kawin_istri_ke").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Perceraian Istri ke- Hanya di Entri Hanya Angka",
					required: "Perceraian Istri ke- Tidak Boleh Kosong"
				}
			});

			$("#anak_ke_istri").rules("add", {
				required: true,
				number: true,
				messages: {
					number: "Anak ke- Hanya di Entri Hanya Angka",
					required: "Anak ke- Tidak Boleh Kosong"
				}
			});
		} else if (__FormTambahanDetail == 'pindah_datang') {

			nokecGet = '';
			nokelGet = '';
			$('#formDatang').addClass('d-none');
			$('#formPindah').addClass('d-none');
			$("#formDatang :input").attr("disabled", true);
			$("#formPindah :input").attr("disabled", true);

			$('#prop_tujuan').change(function (event) {
				event.preventDefault();
				no_prop_tujuan = $(this).val();
				kodewil_tujuan = no_prop_tujuan;
				getKabTujuan(kodewil_tujuan);
				var html_kec = '<option value="">-- Pilih Kecamatan Tujuan</option>';
				var html_kel = '<option value="">-- Pilih Desa/Kelurahan Tujuan</option>';
				$("#kec_tujuan").html(html_kec);
				$("#desa_tujuan").html(html_kel);

			});

			$('#kab_tujuan').change(function (event) {
				event.preventDefault();
				no_kab_tujuan = $(this).val();
				kodewil_tujuan = no_kab_tujuan;
				var html_kel = '<option value="">-- Pilih Desa/Kelurahan Tujuan</option>';
				$("#desa_tujuan").html(html_kel);
				getKecTujuan(kodewil_tujuan);

			});

			$('#kec_tujuan').change(function (event) {
				e_desaTujuan = document.getElementById('desa_tujuan');
				event.preventDefault();
				var no_kec_tujuan = $(this).val();
				e_desaTujuan.selectedIndex = 0;
				getDesaTujuan(no_kec_tujuan);
			});

			function getKabTujuan(kodewil_tujuan) {
				$.ajax({
					method: 'post',
					data: {
						id: kodewil_tujuan
					},
					url: URIGetKab,
					beforeSend: function () {
						showLoader();
					},
					error: function () {
						swal({
							title: "Request Error..!!!",
							text: "Terjadi Kesalahan Saat Meminta Data...!!!",
							type: "error",
							showCancelButton: false,
							confirmButtonText: "OK",
						});
					},
					success: function (data) {

						for (i = 0, len = data.length, html_kab_tujuan = '<option value="">-- Pilih Kabupaten / Kota Tujuan</option>'; i < len; i++) {
							html_kab_tujuan += '<option value="' + data[i]['no_prop'] + data[i]['no_kab'] + '">' + data[i]['nama_kab'] + ' (' + data[i]['no_kab'] + ')</option>';
						}
						$("#kab_tujuan").html(html_kab_tujuan);
					}
				});
			}

			function getKecTujuan(kodewil_tujuan) {
				$.ajax({
					method: 'post',
					data: {
						id: kodewil_tujuan
					},
					url: URIGetKec,
					beforeSend: function () {
						showLoader();
					},
					error: function () {
						swal({
							title: "Request Error..!!!",
							text: "Terjadi Kesalahan Saat Meminta Data...!!!",
							type: "error",
							showCancelButton: false,
							confirmButtonText: "OK",
						});
					},
					success: function (data) {
						for (i = 0, len = data.length, html_kec_tujuan = '<option value="">-- Pilih Kecamatan Tujuan</option>'; i < len; i++) {
							html_kec_tujuan += '<option value="' + data[i]['no_prop'] + data[i]['no_kab'] + data[i]['no_kec'] + '">' + data[i]['nama_kec'] + ' (' + data[i]['no_kec'] + ')</option>';
						}
						$("#kec_tujuan").html(html_kec_tujuan);
					}
				});
			}

			function getDesaTujuan(no_kec_tujuan) {
				$.ajax({
					method: 'post',
					data: {
						id: no_kec_tujuan
					},
					url: URIGetDesa,
					beforeSend: function () {
						showLoader();
					},
					error: function () {
						swal({
							title: "Request Error..!!!",
							text: "Terjadi Kesalahan Saat Meminta Data...!!!",
							type: "error",
							showCancelButton: false,
							confirmButtonText: "OK",
						});
					},
					success: function (data) {
						for (i = 0, len = data.length, html_desa_tujuan = '<option value="">-- Pilih Desa/Kelurahan Tujuan</option>'; i < len; i++) {
							html_desa_tujuan += '<option value="' + data[i]['no_prop'] + '' + data[i]['no_kab'] + '' + data[i]['no_kec'] + '' + data[i]['no_kel'] + '">' + data[i]['nama_kel'] + ' (' + data[i]['no_kel'] + ')</option>';
						}
						$("#desa_tujuan").html(html_desa_tujuan);
					}
				});
			}

			$("#kab_tujuan").rules("add", {
				required: true,
				messages: {
					required: "Kabupaten Tujuan Harus di Pilih",
				}
			});
			$("#no_skpwni").rules("add", {
				required: true,
				format_skpwni: true,
				messages: {
					required: "Nomor Surat Pindah Harus di Isi",
				}
			});

			$("#alamat_datang").rules("add", {
				required: true,
				messages: {
					required: "Alamat Pindah tidak boleh Kosong",
				}
			});

			$("#prop_tujuan").rules("add", {
				required: true,
				messages: {
					required: "Propinsi Tujuan Harus di Pilih",
				}
			});

			$("#alasan_pindah").rules("add", {
				required: true,
				messages: {
					required: "Alasan Pindah Harus di Pilih",
				}
			});

			$("#kec_tujuan").rules("add", {
				required: true,
				messages: {
					required: "Kecamatan Tujuan Harus di Pilih",
				}
			});

			$("#desa_tujuan").rules("add", {
				required: true,
				messages: {
					required: "Desa/Kelurahan Tujuan Harus di Pilih",
				}
			});

			$("#alamat_pindah").rules("add", {
				required: true,
				messages: {
					required: "Alamat Tujuan Harus di Pilih",
				}
			});

			$("#jumlah_pengikut").rules("add", {
				required: true,
				messages: {
					required: "Jumlah Pengikut Harus di Pilih",
				}
			});

			$("#nik_pengikut").rules("add", {
				messages: {
					required: "Nik Pengikut tidak Boleh Kosong",
				}
			});

			$("#no_rt_pindah").rules("add", {
				required: true,
				number: true,
				messages: {
					required: "Nomor RT Tidak boleh Kosong",
					number: "Hanya di isi dengan Nomor",
				}
			});

			$("#no_rw_pindah").rules("add", {
				required: true,
				number: true,
				messages: {
					required: "Nomor RW Tidak boleh Kosong",
					number: "Hanya di isi dengan Nomor",
				}
			});

			$("#no_rt_datang").rules("add", {
				required: true,
				number: true,
				messages: {
					required: "Nomor RT Tidak boleh Kosong",
					number: "Hanya di isi dengan Nomor",
				}
			});

			$("#no_rw_datang").rules("add", {
				required: true,
				number: true,
				messages: {
					required: "Nomor RW Tidak boleh Kosong",
					number: "Hanya di isi dengan Nomor",
				}
			});

		}
	} // endif tambahan 


	function addRuleFile() {
		$('input[type="file"]').each(function () {
			$(this).rules('add', {
				accept: "image/jpg, image/jpeg, image/png",
				messages: {
					required: "File Harus Di Isi/Pilih",
					accept: "Wajib File Foto dengan Ext. JPG/JPEG/PNG"
				}
			})
		});
	}

	$('#R_captcha').click(function (event) {
		event.preventDefault();
		reloadcap();
	});

	function reloadcap() {
		$('#captcha-img').replaceWith('<div id="captcha-img" src="javascrip:;" style="width: 150px; height: 40px; border: 0;" alt=" "> </div>');
		$.ajax({
			url: __ReloadCaptcha,
			success: function (data) {
				$('#captcha-img').replaceWith(data);
				$('#captcha').val('');
			}
		});
	};

	$('#kecamatan').change(function (event) {
		event.preventDefault();
		var no_kec = $(this).val();
		document.getElementById('desa').selectedIndex = 0;
		getDesa(no_kec);
		$('#kecamatan_val').val(no_kec);
	});

	$('#desa').change(function (event) {
		event.preventDefault();
		var no_kel = $(this).val();
		$('#desa_val').val(no_kel);
	});

	function getDesa(no_kec) {
		$.ajax({
			method: 'post',
			data: {
				id: no_kec
			},
			url: URIGetDesa,
			beforeSend: function () {
				showLoader();
			},
			error: function () {

				swal({
					title: "Request Error..!!!",
					text: "Terjadi Kesalahan Saat Meminta Data...!!!",
					type: "error",
					showCancelButton: false,
					confirmButtonText: "OK",
				});
			},
			success: function (data) {
				for (i = 0, len = data.length, html_desa = '<option value="">-- Pilih Desa / Kelurahan</option>'; i < len; i++) {
					html_desa += '<option value="' + data[i]['no_prop'] + '' + data[i]['no_kab'] + '' + data[i]['no_kec'] + '' + data[i]['no_kel'] + '">' + data[i]['nama_kel'] + ' (' + data[i]['no_kel'] + ')</option>';
				}
				if (no_kec === "") {
					disable_elem('desa');
				} else {
					enable_elem('desa');
				}
				$("#desa").html(html_desa);


				if (__dataEdit) {

					document.getElementById('desa').value = no_desa_val;
					$('#desa').attr('readonly', true);
					$('#desa').attr("style", "pointer-events: none;");
				}

				if (__UseApi) {
					var $alasan = $('#alasan').val();
					if ($alasan != '104104102') {
						$('#desa').val(nokelGet);
						disable_elem('desa');
					}

				}
			}
		});
	}


	$('#alasan').change(function (event) {
		event.preventDefault();
		var alasan = $(this).val();

		getSyarat(alasan);



		if (__FormTambahanDetail == 'pindah_datang') {
			var formDatang = $('#formDatang').hasClass('d-none');
			var formPindah = $('#formPindah').hasClass('d-none');

			if (alasan == '104104101') {
				if (__UseApi) {
					UseApi();
				} else
					UnUsedApi();	

				$('#nama_lgkp').val('');
				document.getElementById('kecamatan').selectedIndex = 0;
				getDesa('');

				$('#jenis_mutasi').val('pindah');
				$('#titlePendukung').html('Data Perpindahan');
				$("#this_daerah").prependTo($("#daerah_main"));
				if (!formDatang) {
					$('#formDatang').addClass('d-none')
					$("#formDatang :input").attr("disabled", true);
				}
				if (formPindah) {
					$('#formPindah').removeClass('d-none');
				}
				$("#formPindah :input").attr("disabled", false);

				$('#jumlah_pengikut').change(function (event) {
					var divPengikut = $('#divpengikut').hasClass('d-none');
					event.preventDefault();
					var jml = $(this).val();
					var isTrue = (jml !== '') && (jml > 0) && (jml < 7);

					if (isTrue) {
						if (divPengikut) {
							$('#divpengikut').removeClass('d-none');
						}
						$("#nik_pengikut").attr("disabled", false);
					} else {
						if (!divPengikut) {
							$('#divpengikut').addClass('d-none');
						}
						$("#nik_pengikut").attr("disabled", true);
					}
				});

			} else if (alasan == '104104102') {

				if (__UseApi) {
					UnUsedApi();
				} 						
				$('#jenis_mutasi').val('datang');
				$('#titlePendukung').html('Data Kedatangan');
				if (formDatang) {
					$('#formDatang').removeClass('d-none')
				}

				if (!formPindah) {
					$('#formPindah').addClass('d-none')
					$("#formPindah :input").attr("disabled", true);
				}

				$("#this_daerah").prependTo($("#daerah_second"));
				$("#formDatang :input").attr("disabled", false);

			} else {
				$('#titlePendukung').html('Data Pendukung');
				$('#jenis_mutasi').val('');
				$("#this_daerah").prependTo($("#daerah_main"));
				$("#formDatang :input").attr("disabled", true);
				if (!formDatang) {
					$('#formDatang').addClass('d-none')
				}
				if (!formPindah) {
					$('#formPindah').addClass('d-none')
				}

			}

		}



	});
	if (__FormAktaLahirEdit) {

		$('#jenis_lahir').val(__DFidJLahir);
		$('#hub_pemohon').val(__DFidHubLahir);

	}



	if (__SyaratUpload) {

		$('input[type="file"]').each(function () {
			var id = $(this).attr('id');
			$(this).rules('add', {
				accept: "image/jpg, image/jpeg, image/png",
				messages: {
					required: "File Wajib Di Upload",
					accept: "Wajib File Foto dengan Ext. JPG/JPEG/PNG"
				}
			})
			$(this).dropify({
				AutoUploads: true,
				PostData: URIPostImage,
				messages: {
					"default": "<span  class='m-0 p-0'>Klik Untuk Upload",
				},
				tpl: {
					preview: '<div class="dropify-preview h-100"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"></div></div></div>',
					filename: '',
					inputanDariUpload: '<input type="hidden" name="file_name_uploads[' + id + '][]" value=""/>',
				}
			}).on('dropify.beforeClear', function (event, element) {
				var AttrReq = element.input.data('required');
				if (this) {
					swal({
						title: "Hapus Gambar ini?",
						text: "Gambar yang sudah di hapus tidak bisa di kembalikan!",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "Ya, Hapus!",
						cancelButtonText: "Tidak, Batalkan!",
						closeOnConfirm: true,
						closeOnCancel: true
					}, isConfirm => {
						if (isConfirm) {
							if (AttrReq == 'required')
								this.required = true;
							else
								this.required = false;

							element.resetFile();
							element.input.val('');
							element.resetPreview();
						}
					});
				}
				return false;
			});
		}).on('dropify.errors', function (event, element) {
			var AttrReq = element.input.data('required');
			if (AttrReq == 'required')
				this.required = true;
			else
				this.required = false;
		});
	}

	function setDefolInputFile(id_input, pesan) {
		$('#' + id_input).dropify({
			messages: {
				"default": pesan,
			}
		});
	};

	function getSyarat(alasan) {
		$.ajax({
			method: 'post',
			data: {
				id: alasan
			},
			url: URIGetSyarat,
			beforeSend: function () {
				showLoader();

			},
			error: function () {
				swall_error('Error...!!!', 'Page Error....', 'Refresh Page');
			},
			success: function (data) {
				if (data) {
					for (i = 0, len = data.length, html_syarat = ''; i < len; i++) {
						html_syarat += '<div  class="col-6 pt-0 pb-2 m-0 px-1 mh-100">';
						html_syarat += '<ul class="list-group h-100 text-center" style="padding: 0.1rem;">';
						html_syarat += '<li class="list-group-item h-100" style="padding: 0;">';
						html_syarat += '<input type="file" id="' + data[i]['id_syarat'] + '" accept="image/*" name="files' + data[i]['id_syarat'] + '" class="dropify input-validate" data-height="120" data-show-remove="false" data-max-file-size="5M" data-allowed-file-extensions="jpg png jpeg" ' + data[i]['required'] + '>';
						html_syarat += '</li>';
						html_syarat += '<li class="list-group-item label text-center bg-dark py-0 m-0 h-100 px-1">';
						html_syarat += '<div class="text-light py-1 my-auto">';
						if (data[i]['required'] == 'required') {
							html_syarat += '<span  class="h6 font-weight-bolder text-wrap">Foto/Scan<br>' + data[i]['nama_syarat'] + '<sup class="small text-yellow">*)</sup></span>';
						} else {
							html_syarat += '<span class="h6  font-weight-bolder  text-wrap">Foto/Scan<br>' + data[i]['nama_syarat'] + '</span>';
						}
						if (data[i]['deskripsi'] != '' & data[i]['deskripsi'] != null) {
							html_syarat += '&nbsp;<i id="Popp' + data[i]['id_syarat'] + '" data-toggle="popover" data-placement="bottom" data-content="' + data[i]['deskripsi'] + '" class="fa fa-question-circle text-light" style="font-size:20px"> </i>';
						}
						if (data[i]['form'] == 'Y' & data[i]['file_unduh'] != '') {
							html_syarat += '<br><a href="' + base_url + 'download/formulir/' + data[i]['id_syarat'] + '" class="p-0 m-0 font-weight-bolder font-italic text-yellow text-sm">Unduh Formulir</a>';
						}

						html_syarat += '</div></li>';
						html_syarat += '</ul></div>';

					}
					$("#syaratFile").html(html_syarat);

					for (ii = 0, len = data.length, ''; ii < len; ii++) {
						$('#' + data[ii]['id_syarat'] + '').dropify({
							AutoUploads: true,
							PostData: URIPostImage,
							messages: {
								"default": "<span  class='m-0 p-0'>Klik Untuk Upload",
								'error': ''
							},
							tpl: {
								preview: '<div class="dropify-preview h-100"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"></div></div></div>',
								filename: '',
								// filename: '<p class="dropify-filename d-lg-block d-none"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
								inputanDariUpload: '<input type="hidden" name="file_name_uploads[' + data[ii]['id_syarat'] + '][]"/>',
								// btnPreview: '<button type="button" class="image_preview" data-url-image="" data-title-image="' + data[ii]['nama_syarat'] + '">Lihat Foto</button>',
							}
						});
						$('#Popp' + data[ii]['id_syarat'] + '').popover();
					}
					addRuleFile();
				} else {
					swall_error('Error...!!!', 'Session Expired....', 'Refresh Page');
				}
			}
		});
	};

	function swall_error($title, $pesan, $Ybtn) {
		swal({
			title: $title,
			text: $pesan,
			type: "warning",
			showCancelButton: false,
			confirmButtonText: $Ybtn,
		}, function (isConfirm) {
			if (isConfirm) {
				location.reload();
			}
		});
	};

});