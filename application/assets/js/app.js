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
    	jQuery('.conteneur').slideToggle(2000); // Animation toggle du contenu*/
    	boolean_open = false;
    	return false;
   	});

   	$('.menu_cv').click(function()
  	{
  		if(boolean_open == false){ // Si le menu est déroulé
        $( ".conteneur").slideToggle(1000);

        $( ".conteneur2").hide(500);
        $( ".conteneur3").hide(500);
  		}
   	});

   	$('.menu_projet').click(function()
  	{
  		if(boolean_open == false){ // Si le menu est déroulé
        $( ".conteneur2").slideToggle(1000);

        $( ".conteneur").hide(500);
        $( ".conteneur3").hide(500);
	  	}
   	});

    $('.menu_contact').click(function()
    {
      if(boolean_open == false){ // Si le menu est déroulé
        $( ".conteneur3").slideToggle(1000);

        $( ".conteneur").hide(500);
        $( ".conteneur2").hide(500);
      }
    });
});
