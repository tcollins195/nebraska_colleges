// Process the following after the jQuery library has loaded
$(function(){
	$('table tr').click(function(){
		var url = $(this).attr('data-location');
		window.location = url;
	});
});