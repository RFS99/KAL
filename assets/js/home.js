$(function () {
	$("#btn-search").click(function() {
		var input = $("#tombolcari").val();
		if(input != ""){
			$("#loader").css("display","block");
		}
		else{
			alertify.error("Form pencarian tidak boleh kosong")
		}
		

	});
	$('.CheckMemberClassList').bind('click',function(){
		$('.CheckMemberClassList').removeClass('MemberClassActive').addClass('MemberClassInactive');
		$(this).removeClass('MemberClassInactive').addClass('MemberClassActive');
		$(this).find('input:radio').prop('checked', true);
	})
	
});

$(document).ready(function(){
    $.ajax({
		url: base + "web-scraping",
		dataType: "json",
		beforeSend: function () {
			$("#loader").css("display","block");
		},
        success: function(data){
			alertify.success("Berhasil memuat data.");
			if(data.response == "reload"){
				location.reload();
			}
        },
		error: function () {
			alertify.error("Oops... Terjadi kesalahan pada server.");
		},
		complete: function () {
			$("#loader").css("display","none");
		},
    });

	// Go to Recommendation
	var pathname = window.location.pathname
	if (pathname.indexOf("search") >= 0){
		$('html, body').animate({
			scrollTop: $('#anime-recommendation').offset().top
		}, 'slow');
	}
});
