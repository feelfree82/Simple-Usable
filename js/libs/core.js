$(function() {
	var cc = $.cookie('list_grid');
	if (cc == 'g') {
		$('#products').addClass('grid');
	} else {
		$('#products').removeClass('grid');
	}
});
$(document).ready(function() {

	$('#grid').click(function() {
		$('#products').fadeOut(300, function() {
			$(this).addClass('grid').fadeIn(300);
			$.cookie('list_grid', 'g');
		});
		return false;
	});
	
	$('#list').click(function() {
		$('#products').fadeOut(300, function() {
			$(this).removeClass('grid').fadeIn(300);
			$.cookie('list_grid', null);
		});
		return false;
	});

});