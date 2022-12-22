$(function () {
	$("#form-submit").ajaxForm({
		dataType: "json",
		beforeSubmit: function () {
			$("#btn-submit").prop("disabled", true);
			$("#form-submit").addClass("loading-app");
		},
		success: function (data) {
			if (data.status == "done") {
				alertify.alert("Sukses", data.message, function () {
					alertify.success("Mohon tunggu..");
					window.location.reload();
				});
			} else alertify.error(data.message);
		},
		error: function () {
			alertify.error("Oops... Terjadi kesalahan pada server.");
		},
		complete: function () {
			$("#btn-submit").prop("disabled", false);
			$("#form-submit").removeClass("loading-app");
		},
	});

	$(".btn-generate").on("click", function () {
		var row_id = $(this).attr("data-id"),
			uri = $(this).attr("data-uri");
		var yes = "",
			no = "";

		/** IF YES **/
		yes = function () {
			$.ajax({
				url: uri,
				type: "post",
				data: { user_id: row_id },
				dataType: "json",

				beforeSend: function () {
					$("#table-user").addClass("loading-app");
				},
				success: function (data) {
					if (data.status != "done") {
						alertify.error(data.message);
					} else {
						alertify.alert(
							"Berhasil!",
							"Berhasil membuat token baru. Cek email anda untuk aktivasi.",
							function () {
								alertify.success("Please Wait..");
								window.location.reload();
							}
						);
					}
				},
				error: function () {
					alertify.error("Oops... Terjadi kesalahan pada server.");
				},
				complete: function () {
					$("#table-user").removeClass("loading-app");
				},
			});
		};

		/** IF No **/
		no = function () {
			alertify.error("Cancel");
		};

		alertify.confirm(
			"Generate New Token!",
			"Are you sure want to generate new token?",
			yes,
			no
		);
	});
});
$(document).ready(function(){
    $.ajax({
		url: base + "web-scraping",
		dataType: "json",
		beforeSend: function () {
			$("#loader").css("display","block");
		},
        success: function(){
			alertify.success("Berhasil memuat data.");
        },
		error: function () {
			alertify.error("Oops... Terjadi kesalahan pada server.");
		},
		complete: function () {
			$("#loader").css("display","none");
		},
    });
});
