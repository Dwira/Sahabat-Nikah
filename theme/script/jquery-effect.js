$(document).ready(function() {
	$("#search-input").focusin(function(){
		$("#search-result").slideDown();
	});
	$("#search-input").focusout(function(){
		$("#search-result").slideUp();
	})
});