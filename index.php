<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MonCiné - Le cinéma de quartier</title>
        <link rel="icon" href="assets/MonCine-signe-bleu.png">
        <link href="styles/reset.css" rel="stylesheet">
        <link href="styles/style.css" rel="stylesheet">
    </head>
<body>
    <?php
        include_once("header.php");
    ?>
    <header>
        <div class="navigation">
            <img src="assets/MonCine-signe-bleu.png" alt="MonCiné, le cinéma de quartier">
            <nav class="menuprincipal">
                <ul>
                    <li><a href="https://brisset-theo.alwaysdata.net/Integration/#">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Films</a></li>
                    <li><a href="#">Séries</a></li>
                    <li><a href="https://brisset-theo.alwaysdata.net/Integration/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="slider">
            <div class="slide"> <!--J'ai vu que l'attribut aria-label fonctionne comme un alt mais pour des div. J'ai essayé de voir pour passer les img en background-img,
                                    avec l'aria-label pour décrire les img et ainsi avoir quelque chose de + responsive à ce niveau là. Je n'ai pas eu le temps d'explorer
                                    jusqu'à faire fonctionner la mise en page correctement ! -->
                <img src="img/film1.png" alt="Gerry" class="slide-img">
                <div class="commentaire commentaire_gauche">&#171; Un film beau et dramatique. &#187;</div>
            </div>
            <div class="slide">
                <img src="img/film2.png" alt="310 to yuma" class="slide-img">
                <div class="commentaire commentaire_droite">&#171; Le meilleur western depuis Unforgiven. &#187;</div>
            </div>
            <div class="slide">
                <img src="img/film3.png" alt="Rampart" class="slide-img">
                <div class="commentaire commentaire_gauche">&#171; Woody Harrelson dans un de ses meilleurs rôles. &#187;</div>
            </div>
            <div class="slide">
                <img src="img/serie1.png" alt="Breaking Bad" class="slide-img">
                <div class="commentaire commentaire_gauche">&#171; La meilleure série de tous les temps ? &#187;</div>
            </div>
            <div class="slide">
                <img src="img/serie2.png" alt="Dallas Buyers Club" class="slide-img">
                <div class="commentaire commentaire_droite">&#171; Incroyable perfomance de McCaunoghey. &#187;</div>
            </div>
            <div class="slide">
                <img src="img/rideaux.png" alt="Rideaux de cinéma" class="slide-img">
                <div class="commentaire commentaire_droite long">Un cinéma où l'on diffuse des films peu ou pas vu au cinéma, et des séries !</div>
                <img class="logo_slider" src="assets/MonCine-signe-beige.png" alt="MonCiné, un cinéma de quartier">
            </div>
        </section>
        <section class="presentation">
            <div class="presentation-img">
                <img src="img/scene.png" alt="Salle de cinéma vue depuis l'extérieur">
            </div>
            <div class="presentation-texte">
                <p>Dans un ancien théâtre, le cinéma <span>MonCiné</span> reprend les codes art-déco du début du siècle, un équipement dernier cri et une programmation inédite !</p>
                <a href="#">A propos du cinéma...</a>
            </div>
            <div class="presentation-img">
                <img src="img/salle.png" alt="Salle de cinéma vue depuis l'extérieur">
            </div>
        </section>
        <section class="decouvrir">
            <aside class="vendredi">
                <div class="image_large">
                    <img src="img/serie-vendredi.png" alt="Captain">
                </div>
                <div class="description_droite">
                    <h2>La série <br>du vendredi</h2>
                    <p>De manière inédite, le cinéma <span>MonCiné</span> propose une soirée série le vendredi. De 20h à 23h jusqu'à 3 épisodes d'une série sélectionnée selon les mêmes critiques que les films.</p>
                    <a href="#">Voir toutes les séries</a>
                </div>
            </aside>
            <aside class="films">
                <div class="image_etroite gauche">
                    <img src="img/take-shelter.png" alt="Affiche du film Take Shelter">
                </div>
                <div class="description_centrale">
                    <h2>Notre sélection <br>de <span>films</span></h2>
                    <p>Le cinéma propose une sélection de films rares, peu ou jamais diffusés au cinéma et/ou qui présente dans l'histoire du cinéma une particularité importante, dans l'esprit du quotidien historique.<br><span>MonCiné</span><br>Pour tout public et dans tous les styles.</p>
                    <a href="#">Voir tous les films</a>
                </div>
                <div class="image_etroite droite">
                    <img src="img/insidious.png" alt="Affiche du film Insidious">
                </div>
            </aside>
        </section>
    </main>
    <footer>
        <div class="contenu_footer">
            <nav class="menusecondaire">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Films</a></li>
                    <li><a href="#">Séries</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="logofooter">
                <img src="assets/MonCine-signe-beige.png" alt="MonCiné, le cinéma de quartier">
            </div>
            <div class="coordonnees">
                <div class="adresse">
                    <h2>MonCiné</h2>
                    <p>13 avenue du Petit Chemin</p>
                    <p>64240 Hasparren</p>
                </div>
                <div class="courriel">
                    <a href="mailto://moncine@gmail.com">contact@moncine.com</a>
                </div>
                <div class="reseaux">
                    <ul>
                        <li><a href="#"><img src="assets/facebook-beige.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="assets/instagram-beige.png" alt="Instagram"></a></li>
                        <li><a href="#"><img src="assets/x-beige.png" alt="X"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bandeau_pied">
            <img src="img/sieges.png" alt="Rangées de siège de cinéma de couleur rouge">
            <div class="copy"><p>2024 | Tous droits réservés | MonCiné</p></div>
        </div>
    </footer> 
</body>

</html>