$(function(){
	$(".view-details").click(function(){
		var btn = $(this).children(".glyphicon"); 
		
		btn.toggleClass('glyphicon-chevron-down');
		btn.toggleClass('glyphicon-chevron-up');
	});
});