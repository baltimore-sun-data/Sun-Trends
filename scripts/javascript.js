 ///////////////////////////////JAVASCRIPT FOR TRENDS///////////////////////////////////


//Mobile nav animation

function show_mobile_nav() {

$("#menu-bars").click(function() {

  $("ul#mobile-nav").slideToggle("slow");
	
 	});

}




$(document).ready(function(){
  show_mobile_nav();
});			
