jQuery().ready(function(){

	var fleche = $(".flaticon-arrow128");

	$(".flaticon-arrow128").mouseover(function(e){
		fleche.animate({
			bottom: "-=10"
		});
			
	});

	$(".flaticon-arrow128").mouseleave(function(e){
		fleche.animate({
			bottom: "+=10"
		});
		
	});

});