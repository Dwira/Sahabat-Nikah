$(document).ready(function() {
	$("#search-input").focusin(function(){
		$("#search-result").slideDown();
	});
	$("#search-input").focusout(function(){
		$("#search-result").slideUp();
	})
	$("#btn-login").click(function() {
		$("#login-form").slideToggle();
		state = $(this).attr('class');
		if (state=='btn-header-action')
			$(this).addClass("active");
		else
			$(this).removeClass("active");
	})
	
	$("#watch-wedding").click(function() {
		$("#wedding-preview img").slideUp();
		$("#wedding-preview").delay(1000).load("video #wedding-video", function(response, status, xhr) {
		if (status == "error") {
			var msg = "Sorry but there was an error: ";
			$("#wedding-preview").html(msg + xhr.status + " " + xhr.statusText);
		} else { $("#watch-wedding").fadeOut(); }
		});
	});
});