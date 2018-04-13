$(function() {
	$(document).on('click', '.rr-show', function() {
		// Toggle container open and closed
		$(this).siblings('.rr-container').slideToggle(300);
	});
	$(document).on('click', '.rr-rename input', function() {
		// If the rename input is empty, copy the placeholder to the input
		if($(this).val() === '') $(this).val($(this).attr('placeholder'));
	});
});
