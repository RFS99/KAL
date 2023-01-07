$(function () {
	$("#btn-search").click(function () {
		var input = $("#tombolcari").val();
		if (input != "") {
			$("#loader").css("display", "block");
		} else {
			alertify.error("Form pencarian tidak boleh kosong");
		}
	});
	$(".CheckMemberClassList").bind("click", function () {
		$(".CheckMemberClassList")
			.removeClass("MemberClassActive")
			.addClass("MemberClassInactive");
		$(this).removeClass("MemberClassInactive").addClass("MemberClassActive");
		$(this).find("input:radio").prop("checked", true);
	});
});

$(document).ready(function () {
	$.ajax({
		url: base + "web-scraping",
		dataType: "json",
		beforeSend: function () {
			$("#loader").css("display", "block");
		},
		success: function (data) {
			alertify.success("Berhasil memuat data.");
			if (data.response == "reload") {
				location.reload();
			}
		},
		error: function () {
			alertify.error("Oops... Terjadi kesalahan pada server.");
		},
		complete: function () {
			$("#loader").css("display", "none");
		},
	});

	// Go to Recommendation
	var pathname = window.location.pathname;
	if (pathname.indexOf("search") >= 0) {
		$("html, body").animate(
			{
				scrollTop: $("#anime-recommendation").offset().top,
			},
			"slow"
		);
	}
});

$(function () {
	$("#default-form").ajaxForm({
		dataType: "json",
		beforeSubmit: function () {
			$("#btn-submit").prop("disabled", true);
			$("#default-form").addClass("loading-app");
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
			$("#default-form").removeClass("loading-app");
		},
	});
	$(".btn-delete").on("click", function () {
		var row_id = $(this).attr("data-id"),
			row_name = $(this).attr("data-name"),
			uri = $(this).attr("data-uri");
		var yes = "",
			no = "";

		/** IF YES **/
		yes = function () {
			$.ajax({
				url: uri,
				type: "post",
				data: { anime_id: row_id },
				dataType: "json",

				beforeSend: function () {
					$(".table").addClass("loading-app");
				},
				success: function (data) {
					if (data.status != "done") {
						alertify.error(data.message);
					} else {
						alertify.alert(
							"Berhasil!",
							"Berhasil menghapus data <strong>" + row_name + "</strong>.",
							function () {
								alertify.success("Harap tunggu..");
								window.location.reload();
							}
						);
					}
				},
				error: function () {
					alertify.error("Oops... Terjadi kesalahan pada server.");
				},
				complete: function () {
					$(".table").removeClass("loading-app");
				},
			});
		};

		/** IF No **/
		no = function () {
			alertify.error("Cancel");
		};

		alertify.confirm(
			"Hapus Anime!",
			"Apakah anda yakin ingin menghapus <strong>" + row_name + "</strong>?",
			yes,
			no
		);
	});
});
