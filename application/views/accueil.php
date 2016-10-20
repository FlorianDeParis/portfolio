<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <meta charset="UTF-8">
    <?php foreach($css as $src) { echo '<link rel="stylesheet" type="text/css" href="'.$src.'">';}?>
    <?php foreach($js as $src) { echo '<script type="text/javascript" src = "'.$src.'" ></script >';}?>
    <title><?php echo $title; ?></title>
</head>
<body onload="loading()">
<div id="chargement">
    <span class="loader loader-quart"></span>
    Un peu de patience...
</div>

<!--CADRE DE PRESENTATION-->
<div class="corps" id="site">
    <div class="presentation">
        <div class="photo_corps">
            <img src="./img/myself.jpg">
        </div>
        <div class="titre_corps">
            <div class="entete">Florian Tournay</div>
            <div class="bio">Développeur Web<br>
                Un type un peu geek mais pas trop, passionné de webdesign, des technologies du web ainsi que du high-tech.</div>
        </div>
    </div>
    <div class="arrow">
        <i class="flaticon-arrow128">
            <span class="popup">Cliques, je ne mords pas !</span>
        </i>
    </div>
</div>

<!-- MENU CATEGORIES -->
<div class="menu">
    <div class="menu_cv">
        Curriculum vitae
    </div>
    <div class="menu_projet">
        Projets / réalisations
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
                        <font class="brevet">Master - Ingénierie du Web et E-Business</font><br>
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
                        <font class="brevet">Développeur Web</font><br>
                        <font class="etablissement">PushUp Agency - Asnières-sur-Seine</font><br>
                        <font class="lieu">Formation en alternance</font>
                    </div>
                    <div class="logo_etablissement">
                        <img src="./img/pushup.jpeg">
                    </div>
                </li>
                <li>
                    <span class="annee rotate">2013-2014</span>
                    <div class="etude">
                        <font class="brevet">Analyste informatique / développeur web front-end</font><br>
                        <font class="etablissement">HSBC - Courbevoie (La Défense)</font><br>
                        <font class="lieu">Formation en alternance</font>
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
        </ul>
    </aside>
</div>

<!--CONTENEUR DE PROJETS-->
<div class="conteneur2">
    <section class="projet">
        <div class="titre_projet">&nbsp;&nbsp;Projets</div>
        <!-- palette #394264 / #2E3654 -->
        <ul class="ligne">
            <li class="ligne_proj">
                <div class="annee_proj">2014</div>
                <div class="contenu_proj">Conception d'un thème sous Wordpress pour un site immobilier
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Environnement technique:</u></b> HTML / CSS3 / PHP</div>
                <div class="img_proj"><img src="./img/wordpress_logo.png"></div>
            </li>
            <li class="ligne_proj">
                <div class="annee_proj">2014</br>-</br>2013</div>
                <div class="contenu_proj">Conception et design du site Antica.fr (Actualités des Nouvelles Technologies de l'Information et des Communications de l'Avenir)
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Environnement technique:</u></b> HTML5 / CSS3 / JS / JQuery / JQuery UI</div>
                <div class="img_proj"><a onclick="window.open('http://www.antica.fr');"><img src="./img/antica_min.png"></a></div>
            </li>
            <li class="ligne_proj">
                <div class="annee_proj">2013</div>
                <div class="contenu_proj">Conception d'un slideshow pour Wordpress
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Environnement technique:</u></b> HTML / CSS3 / JS / JQuery / PHP</div>
                <div class="img_proj"><img src="./img/wordpress_logo.png"></div>
            </li>
            <li class="ligne_proj">
                <div class="annee_proj">2012</div>
                <div class="contenu_proj">Développement de la partie client d'une application de télésurveillance et d'enregistrement vidéo de caméras IP Axis 213PTZ
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Environnement technique:</u></b> C++ <i>via Qt Creator</i></div>
                <div class="img_proj"><img src="./img/qt-logo.png"></div>
            </li>
        </ul>
    </section>
    <section class="projet_design">
        <div class="titre_projet_reas">&nbsp;&nbsp;Quelques réalisations graphiques... </div>
        <div class="contenu_projet_reas">
            <a href="img/reas/androsignature.png" data-lightbox="image-1" data-title="Signature android pour le site d'Androidgen"><img src="./img/reas/androsignature_thumbnail.png"></a>
            <a href="img/reas/Asus-Wallapaper.png" data-lightbox="image-1" data-title="Réalisation d'un fond d'écran personnel Asus"><img src="./img/reas/Asus-Wallapaper_thumbnail.png"></a>
            <a href="img/reas/Avatar.png" data-lightbox="image-1" data-title="Avatar réalisé pour un forumeur"><img src="./img/reas/Avatar_thumbnail.png"></a>
            <a href="img/reas/Banderole.png" data-lightbox="image-1" data-title="Bannière de ma page personnelle de mix"><img src="./img/reas/Banderole_thumbnail.png"></a>
            <a href="img/reas/bootlegcover.png" data-lightbox="image-1" data-title="Jaquette d'un bootleg personnellement réalisé"><img src="./img/reas/bootlegcover_thumbnail.png"></a>
            <a href="img/reas/Bootlogo.png" data-lightbox="image-1" data-title="Bootlogo d'iPhone personnalisé pour un client"><img src="./img/reas/Bootlogo_thumbnail.png"></a>
            <a href="img/reas/ChannelTemplate.jpg" data-lightbox="image-1" data-title="Ancien template pour ma chaine personnelle Youtube"><img src="./img/reas/ChannelTemplate_thumbnail.png"></a>
            <a href="img/reas/contestlogo.png" data-lightbox="image-1" data-title="Avatar proposé pour un concours du meilleur avatar"><img src="./img/reas/contestlogo_thumbnail.png"></a>
            <a href="img/reas/djarchimed-banner.jpg" data-lightbox="image-1" data-title="Deuxième bannière pour mon site de mix"><img src="./img/reas/djarchimed-banner_thumbnail.png"></a>
            <a href="img/reas/djarchimedwall.png" data-lightbox="image-1" data-title="Fond de mon site de mix"><img src="./img/reas/djarchimedwall_thumbnail.png"></a>
            <a href="img/reas/ET.png" data-lightbox="image-1" data-title="Logo proposé pour un site prototype de High-Tech"><img src="./img/reas/ET_thumbnail.png"></a>
            <a href="img/reas/Hennessy.png" data-lightbox="image-1" data-title="Bannière pour une connaissance personnelle"><img src="./img/reas/Hennessy_thumbnail.png"></a>
            <a href="img/reas/JB416.png" data-lightbox="image-1" data-title="Autre bannière pour un site prototype High-Tech"><img src="./img/reas/JB416_thumbnail.png"></a>
            <a href="img/reas/persowall.png" data-lightbox="image-1" data-title="Fond d'écran personnel de mon compte Twitter"><img src="./img/reas/persowall_thumbnail.png"></a>
            <a href="img/reas/Savoirutile-wall.png" data-lightbox="image-1" data-title="Fond d'écran pour un utilisateur Twitter"><img src="./img/reas/Savoirutile-wall_thumbnail.png"></a>
            <a href="img/reas/stargate_atlantis.png" data-lightbox="image-1" data-title="Bannière personnelle pour un ancien forum"><img src="./img/reas/stargate_atlantis_thumbnail.png"></a>
            <a href="img/reas/TF2signature.png" data-lightbox="image-1" data-title="Signature personnelle pour un forum de Team Fortress 2"><img src="./img/reas/TF2signature_thumbnail.png"></a>
            <a href="img/reas/UKDesign.png" data-lightbox="image-1" data-title="Réalisation personnelle"><img src="./img/reas/UKDesign_thumbnail.png"></a>
        </div>
    </section>
</div>

<!--CONTENEUR DU CONTACT-->
<div class="conteneur3">
    <div class="contact">
        <div class="titre_contact">&nbsp;&nbsp;Me contacter</div>
        <div class="contenu_contact">
            <div class="icones_contact">
                <div class="contact_droit">
                    <a href="http://www.twitter.com/floriandeparis">
                        <img src="./img/logo-twitter.png">
                        <br><font>Suivez-moi sur Twitter ...</font>
                    </a>
                </div>
                <div class="contact_gauche">
                    <a href="http://fr.linkedin.com/pub/florian-tournay/80/878/8b5/">
                        <img src="./img/logo-linkedin.png">
                        <br><font>... sur Linkedin ...</font>
                    </a>
                </div>
            </div>
            <div class="icones_contact_bis">
                <div class="contact_droit">
                    <a href="https://github.com/FlorianDeParis">
                        <img src="./img/github_icon.png">
                        <br><font>... sur GitHub ...</font>
                    </a>
                </div>
                <div class="contact_gauche">
                    <a href="http://www.viadeo.com/fr/profile/florian.tournay">
                        <img src="./img/picto_viadeo.png">
                        <br><font>... ainsi que sur Viadeo</font>
                    </a>
                </div>
            </div>
            <div class="bottom_contact">Si vous voulez me contacter: florian.tournay@hotmail.fr</div>
        </div>
    </div>
</div>
</body>
</html>