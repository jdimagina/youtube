jQuery(document).ready(function(){

  	jQuery(window).scroll(function(){
			var scroll = jQuery(window).scrollTop();

			jQuery("#franja_contenido").css("background-position","50% -" + ((jQuery(this).scrollTop() -600)  ) + "px");

	});

 });