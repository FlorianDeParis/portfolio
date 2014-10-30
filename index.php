<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/flaticon.css">
		<link rel="stylesheet" type="text/css" href="jqueryui/development-bundle/themes/smoothness/jquery.ui.all.css"/> 
		<script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
		<!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/TweenMax.min.js"></script>-->
		<script type="text/javascript" src="./js/app.js"></script>
		<!--[if IE]>
      		<link rel="stylesheet" type="text/css" href="./css/ie.css" />
      	<![endif]-->
		<title>Florian Tournay</title>
	</head>
	<body onload="loading()">
		<div id="chargement">
				<span class="loader loader-quart"></span>
				Chargement...
		</div>

		<!--CADRE DE PRESENTATION-->
		<div class="corps" id="site">
			<div class="presentation">
				<div class="photo_corps">
					<img src="./img/myself.jpg">
				</div>
				<div class="titre_corps">
					<div class="entete">Florian Tournay</div>
					<div class="bio">Développeur / Intégrateur Web<br>
						Etudiant en alternance, passionné de design, des technologies du web ainsi que du high-tech.</div>
				</div>
			</div>
			<div class="arrow">
				<i class="flaticon-arrow128">
					<span class="popup">Je vous en prie, cliquez!</span>
				</i>
			</div>
		</div>

		<!-- MENU CATEGORIES -->
		<div class="menu">
			<div class="menu_cv">
				Curriculum vitae
			</div>
			<div class="menu_projet">
				Projets
			</div>
			<div class="menu_contact">
				Me contacter
			</div>
		</div>

		<!--CONTENEUR CURRICULUM VITAE-->
		<div class="conteneur">

			<!--COLONNE GAUCHE -->
			<section class="parcours">

				<!--CURSUS SCOLAIRE-->
				<section class="parcours_scolaire">
					<div class="titre_cursus">&nbsp;&nbsp;Cursus Scolaire</div>
					<ul class="liste_des_cursus">
						<li>
							<span class="annee rotate">2014-2016</span>
							<div class="etude">
								<font class="brevet">Master - Ingénierie du Web et E-Business (espéré)</font><br>
								<font class="etablissement">ESGI - Ecole Supérieure de Génie Informatique</font><br>
								<font class="lieu">Paris 12 - Paris</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/Logo-ESGI.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2014</span>
							<div class="etude">
								<font class="brevet">Bachelor (équivalent Licence) - Développement web</font><br>
								<font class="etablissement">ESGI - Ecole Supérieure de Génie Informatique</font><br>
								<font class="lieu">Paris 12 - Paris</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/Logo-ESGI.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2013</span>
							<div class="etude">
								<font class="brevet">BTS IRIS - Informatique des Réseaux de l'Industrie et des Services techniques</font><br>
								<font class="etablissement">Lycée Polyvalent Dorian</font><br>
								<font class="lieu">Paris 11 - Paris</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/Dorian.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2011</span>
							<div class="etude">
								<font class="brevet">Baccalauréat STI - Sciences Techniques de l'Industrie <font style="font-family: Origin-ExtraBold, Arial; font-size: 10px;">- (Spé. Génie Electronique Numérique)</font></font><br>
								<font class="etablissement">Lycée Polyvalent Louis Armand</font><br>
								<font class="lieu">Nogent-Sur-Marne - Val de Marne</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/louis_armand.png">
							</div>
						</li>
					</ul>
				</section>

				<!--EXPERIENCE PROFESIONNELLE-->
				<section class="parcours_professionnel">
					<div class="titre_cursus" style="margin-bottom: 15px">&nbsp;&nbsp;Expérience professionnelle</div>
					<ul class="liste_des_cursus">
						<li>
							<span class="annee rotate">2014-2016</span>
							<div class="etude">
								<font class="brevet"><i>En recherche d'entreprise ...</i></font><br>
								<font class="etablissement"></font><br>
								<font class="lieu"></font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/turn-arrow.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2013-2014</span>
							<div class="etude">
								<font class="brevet">Analyste informatique / développeur web front-end</font><br>
								<font class="etablissement">HSBC - Courbevoie (La Défense)</font><br>
								<font class="lieu">Contrat professionnel de 11 mois</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/HSBC.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2012</span>
							<div class="etude">
								<font class="brevet">Stagiaire développeur / testeur en Jython</font><br>
								<font class="etablissement">Axway - Puteaux</font><br>
								<font class="lieu">Stage de découverte du Jython</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/Axway.png">
							</div>
						</li>
						<li>
							<span class="annee rotate">2007</span>
							<div class="etude">
								<font class="brevet">Stagiaire développeur / testeur en Pascal et MySQL</font><br>
								<font class="etablissement">KDI - Aubervilliers</font><br>
								<font class="lieu">Stage de découverte du Pascal et de MySQL</font>
							</div>
							<div class="logo_etablissement">
								<img src="./img/logo-kdi.png">
							</div>
						</li>
					</ul>
				</section>


				<!--PASSIONS / INTERETS -->	
				<section class="liste_interets">
					<div class="titre_cursus" style="margin-bottom: 15px">&nbsp;&nbsp;Passions / intérêts</div>
					<ul class="interets">
						<li>
							<div class="etude">
								<font class="brevet">Sport:</font><br>
								<font class="etablissement">Badminton, VTT, Sport en salle</font>
							</div>
						</li>
						<li>
							<div class="etude">
								<font class="brevet">Passions:</font><br>
								<font class="etablissement">Musique (DJing) , Internet, Webdesign, High-Tech, Smartphones, Android, Linux</font>
							</div>
						</li>
						<li>
							<div class="etude">
								<font class="brevet">Activités:</font><br>
								<font class="etablissement">Composition et mixage de musiques (DJing),<br>
									design d'un site d'actualités numériques, <br>
									maintenance et réparation de smartphones et PCs,<br>
									jeux en ligne,<br>
									promenades,<br>
									création d'un réseau multimédia domestique.
									</font>
							</div>
						</li>
					</ul>
				</section>


			</section>

			<!--COMPETENCES TECHNIQUES-->
			<aside class="competences">
				<div class="titre_competences">&nbsp;&nbsp;Compétences</div>
				<ul class="competences_liste">
					<li>
						<div class="competences_cat_label">Développement</div>
						<ul class="competences_cat competences_liste_dev">
							<li class="liste_matiere">
								<div class="matiere">HTML5 / XHTML</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">CSS3</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">JS / jQuery / Ajax</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">PHP objet</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">CMS (WordPress)</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Python</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Java</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">C / C++</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Shell Script</div>
								<div class="classement">
									<img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag-active-green.png"><!--
									--><img src="./img/html-tag-active-green.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div class="competences_cat_label">Design</div>
						<ul class="competences_cat competences_liste_design">
							<li class="liste_matiere">
								<div class="matiere">Responsive</div>
								<div class="classement">
									<img src="./img/html-tag-active-yellow.png"><!----><img src="./img/html-tag-active-yellow.png"><!--
									--><img src="./img/html-tag-active-yellow.png"><!----><img src="./img/html-tag-active-yellow.png"><!--
									--><img src="./img/html-tag.png"><!----><img src="./img/html-tag.png"><!--
									--><img src="./img/html-tag.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Photoshop</div>
								<div class="classement">
									<img src="./img/photoshop-active-yellow.png"><!----><img src="./img/photoshop-active-yellow.png"><!--
									--><img src="./img/photoshop-active-yellow.png"><!----><img src="./img/photoshop-active-yellow.png"><!--
									--><img src="./img/photoshop.png"><!----><img src="./img/photoshop.png"><!--
									--><img src="./img/photoshop.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Illustrator</div>
								<div class="classement">
									<img src="./img/illustrator-active-yellow.png"><!----><img src="./img/illustrator-active-yellow.png"><!--
									--><img src="./img/illustrator-active-yellow.png"><!----><img src="./img/illustrator.png"><!--
									--><img src="./img/illustrator.png"><!----><img src="./img/illustrator.png"><!--
									--><img src="./img/illustrator.png">
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div class="competences_cat_label">Systèmes</div>
						<ul class="competences_cat competences_liste_sys">
							<li class="liste_matiere">
								<div class="matiere">Windows XP/Vista/7/8/8.1</div>
								<div class="classement">
									<img src="./img/windows11-active-red.png"><!----><img src="./img/windows11-active-red.png"><!--
									--><img src="./img/windows11-active-red.png"><!----><img src="./img/windows11-active-red.png"><!--
									--><img src="./img/windows11-active-red.png"><!----><img src="./img/windows11.png"><!--
									--><img src="./img/windows11.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Linux (Debian, ... )</div>
								<div class="classement">
									<img src="./img/linux1-active-red.png"><!----><img src="./img/linux1-active-red.png"><!--
									--><img src="./img/linux1-active-red.png"><!----><img src="./img/linux1-active-red.png"><!--
									--><img src="./img/linux1.png"><!----><img src="./img/linux1.png"><!--
									--><img src="./img/linux1.png">
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div class="competences_cat_label">Langues</div>
						<ul class="competences_cat competences_liste_langues">
							<li class="liste_matiere">
								<div class="matiere">Anglais</div>
								<div class="classement">
									<img src="./img/united2-active-green.png"><!----><img src="./img/united2-active-green.png"><!--
									--><img src="./img/united2-active-green.png"><!----><img src="./img/united2-active-green.png"><!--
									--><img src="./img/united2.png"><!----><img src="./img/united2.png"><!--
									--><img src="./img/united2.png">
								</div>
							</li>
							<li class="liste_matiere">
								<div class="matiere">Espagnol</div>
								<div class="classement">
									<img src="./img/spain-active-green.png"><!----><img src="./img/spain-active-green.png"><!--
									--><img src="./img/spain.png"><!----><img src="./img/spain.png"><!--
									--><img src="./img/spain.png"><!----><img src="./img/spain.png"><!--
									--><img src="./img/spain.png">
								</div>
							</li>
						</ul>
					</li>
					<li class="legende">
						<div class="legende_label">Légende</div>
						<ul>
							<li><div class="legende_points">1 point:</div>Niveau débutant</li>
							<li><div class="legende_points">2 points:</div>Niveau débutant avancé</li>
							<li><div class="legende_points">3 points:</div>Niveau moyen</li>
							<li><div class="legende_points">4 points:</div>Niveau acceptable</li>
							<li><div class="legende_points">5 points:</div>Niveau bon</li>
							<li><div class="legende_points">6 points:</div>Niveau avancé</li>
							<li><div class="legende_points">7 points:</div>Niveau très bon</li>
						</ul>
					</li>
				</ul>
			</aside>
		</div>

		<!--CONTENEUR DE PROJETS-->
		<div class="conteneur2">
			<div class="projet">
				<div class="titre_projet">&nbsp;&nbsp;Projets</div>
				<!-- palette #394264 / #2E3654 -->
				<ul class="ligne">
					<li class="ligne_proj">
						<div class="contenu_proj">Développement d'une application de télésurveillance et enregistrement de caméras IP</div>
						<div class="img_proj">IMG</div>
					</li>
					<li class="ligne_proj">
						<div class="contenu_proj">CONTENU</div>
						<div class="img_proj">IMG</div>
					</li>
				</ul>
			</div>
			<div class="projet_design">
				<div class="titre_projet_reas">&nbsp;&nbsp;Réalisations graphiques</div>
				<div class="contenu_projet_reas">
					<fieldset>
						<legend style="font-family: Exo-Light, Arial">Exemple</legend>
						<img src="./img/antica.png">
						<span style="font-family: Exo-Light, Arial">Lorem Ipsum</span>
					</fieldset>
				</div>
			</div>
		</div>

		<!--CONTENEUR DU CONTACT-->
		<div class="conteneur3">
			<div class="contact">
				<div class="titre_contact">&nbsp;&nbsp;Me contacter</div>
				<div class="contenu_contact">
						LOREM IPSUM
				</div>
			</div>
		</div>
	</body>
</html>