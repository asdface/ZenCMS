jQuery.preloadImages = function()
{
	for(var i = 0; i<arguments.length; i++)
	jQuery("<img>").attr("src", arguments[i]);
}
jQuery.preloadImages("votenew.jpg", "21.jpg", "vote.gif");

jQuery(document).ready(function(){
	
	$("#iconbar li a").hover(
		function(){
			var iconName = $(this).children("img").attr("src");
			$(this).css("cursor", "pointer");
			$(this).animate({ width: "220px" }, {queue:false, duration:"normal"} );
			$(this).children("span").animate({opacity: "show"}, "fast");
		}, 
		function(){
			var iconName = $(this).children("img").attr("src");		
			$(this).animate({ width: "87px" }, {queue:false, duration:"normal"} );
			$(this).children("span").animate({opacity: "hide"}, "fast");
		});
});