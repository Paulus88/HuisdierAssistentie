if (location.protocol != 'https:')
{
 location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}
$('#nearestStaticContainer').on('contextmenu', 'img', function(e){
  return false;
});
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$("html,body").animate({scrollTop:$(this.hash).offset().top},900);
				});
			});