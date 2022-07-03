$(document).ready(function () {
	$("#dt").DataTable();

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
							"Berhasil menghapus akun <strong>" + row_name + "</strong>.",
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
			"Delete Account!",
			"Are you sure want to delete account <strong>" + row_name + "</strong>?",
			yes,
			no
		);
	});

	$(".btn-reset").on("click", function () {
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
							"Berhasil reset password <strong>" + row_name + "</strong>.",
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
			"Reset Password!",
			"Are you sure want to reset password <strong>" +
				row_name +
				"</strong>? Password will be <strong>123456</strong>",
			yes,
			no
		);
	});

	$(".btn-verify").on("click", function () {
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
							"Berhasil mengaktifkan akun <strong>" + row_name + "</strong>.",
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
			"Activation Account!",
			"Are you sure want verify <strong>" + row_name + "</strong>?",
			yes,
			no
		);
	});

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
});
