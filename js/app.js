function loading(){
  document.getElementById('chargement').style.display='none';
  document.getElementById('site').style.visibility='visible';
}

jQuery().ready(function(){

	// On cache la zone de texte
   	jQuery('.conteneur').hide();  // Zone "conteneur" caché au démarrage
   	jQuery('.conteneur2').hide(); // Zone "conteneur2" caché au démarrage
    jQuery('.conteneur3').hide(); // Zone "conteneur3" caché au démarrage
   	jQuery('.menu').hide();       // Zone "menu" caché au démarrage

   	var boolean_cv = false;			  // Etat du conteneur CV qui est fermé de base
   	var boolean_projet = false;		// Etat du conteneur Projets qui est fermé de base
   	var boolean_open = true;		  // Etat du contenu qui est fermé de base

   	// toggle() lorsque le lien avec la classe .flaticon-arrow128 est cliqué
   	jQuery('.flaticon-arrow128').click(function()
  	{
  		jQuery('.menu').slideToggle(1000); // Animation toggle du menu
    	jQuery('.conteneur').slideToggle(2000); // Animation toggle du contenu
    	boolean_open = false;
    	return false;
   	});

   	$('.menu_cv').click(function()
  	{
  		if(boolean_open == false){ // Si le menu est déroulé
	  		$(".conteneur").effect("drop", {mode:"show"}, 1000);  // Animation de déroulement de conteneur
        $(".conteneur2").effect("drop", {mode:"hide"}, 1000); // Animation d'enroulement de conteneur
        /*$(".conteneur").show("drop", {direction:"up"}, 1000);
	  		$(".conteneur2").hide("drop", {direction:"up"}, 1000);*/
  		}
   	});

   	$('.menu_projet').click(function()
  	{
  		if(boolean_open == false){ // Si le menu est déroulé
	  		$(".conteneur2").effect("drop", {mode:"show"}, 1000); // Animation de déroulement de conteneur2
	  		$(".conteneur").effect("drop", {mode:"hide"}, 1000);  // Animation d'enroulement de conteneur
        /*$(".conteneur").hide("drop", {direction:"up"}, 1000);
        $(".conteneur2").show("drop", {direction:"up"}, 1000);*/
	  	}
   	});
    
    // =======> ANIMATION TEMPORAIRE <=======
    /*jQuery('.menu_cv').click(function()
    {
      if(boolean_open == false){
        jQuery('.conteneur').show();
        jQuery('.conteneur2').hide();
        jQuery('.conteneur3').hide();
      }
    });

    jQuery('.menu_projet').click(function()
    {
      if(boolean_open == false){
        jQuery('.conteneur2').show();
        jQuery('.conteneur').hide();
        jQuery('.conteneur3').hide();
      }
    });

    jQuery('.menu_contact').click(function()
    {
      if(boolean_open == false){
        jQuery('.conteneur3').show();
        jQuery('.conteneur2').hide();
        jQuery('.conteneur').hide();
      }
    });*/

});
