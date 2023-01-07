$(function () {
	$("#form-login").ajaxForm({
		dataType: "json",
		beforeSubmit: function () {
			$("#btn-submit").prop("disabled", true);
			$("#form-login").addClass("loading-app");
		},
		success: function (data) {
			if (data.status == "done") {
				alertify.alert("Sukses", data.message, function () {
					alertify.success("Mohon tunggu..");
					window.location.href = "login";
				}); /*window.location.reload();*/
			} else alertify.error(data.message);
		},
		error: function () {
			alertify.error("Oops... Terjadi kesalahan pada server.");
		},
		complete: function () {
			$("#btn-submit").prop("disabled", false);
			$("#form-login").removeClass("loading-app");
		},
	});
});

$(function () {
	$('select').each(function () {
	  $(this).select2({
		theme: 'bootstrap4',
		width: 'style',
		placeholder: $(this).attr('placeholder'),
		allowClear: Boolean($(this).data('allow-clear')),
	  });
	});
  });