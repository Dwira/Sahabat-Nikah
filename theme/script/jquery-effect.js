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
});