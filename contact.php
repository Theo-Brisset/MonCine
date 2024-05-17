<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MonCiné - Le cinéma de quartier</title>
        <link rel="icon" href="assets/MonCine-signe-bleu.png">
        <link href="styles/reset.css" rel="stylesheet">
        <link href="styles/style.css" rel="stylesheet">
        <link href="styles/style_contact.css" rel="stylesheet">
    </head>
<body>
    <header>
        <div class="navigation">
            <img src="assets/MonCine-signe-bleu.png" alt="MonCiné, le cinéma de quartier">
            <nav class="menuprincipal">
                <ul>
                    <li><a href="https://brisset-theo.alwaysdata.net/Integration/">Accueil</a></li>
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
            <div class="slide">
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
        <section class="contact">
            <h2 class="no_style">Contact</h2>
            <section class="formulaire">
                <p><span>MonCiné</span> se situe au beau milieu de la ville d'Anglet, facilement accessible en transport publique, le cinéma dispose d'un parking de plus de 50 places. </p>
                <p>Le cinéma est ouvert tous les jours de 10h, première séance, à 22h, dernière séance. Notre équipe sera toujours présente pour vous y accueillir.</p>
                <p>Vous pouvez nous contacter durant ces heures d'ouverture au téléphone, remplir ce formulaire en ligne, nous ne manquerons pas de vous répondre !</p>
                <p>Enfin, vous pouvez nous contacter sur nos réseaux sociaux : facebook, twitter et instagram, et pourquoi pas vous y abonner.</p>
                <p>Bon film !</p>
                <form method="post" name="contact" target="_blank" id="contact">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Patrick" minlength="2" required>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Buisson" minlength="2" required>
                    <label for="email">Adresse email</label>
                    <input type="text" name="email" id="email" placeholder="exemple@exemple.com" minlength="2" required>
                    <label for="message" class="label_message">Votre message</label>
                    <textarea name="message" id="message" placeholder="Votre message..." required></textarea>
                    <input type="submit" class="submit" value="ENVOYER">
                </form>
            </section>
            <aside>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2894.8810362158742!2d-1.506268!3d43.483953!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5140121c394619%3A0x9f107f7c2385f83!2sMoncin%C3%A9%20Anglet!5e0!3m2!1sfr!2sus!4v1715634352389!5m2!1sfr!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact">
                    <img src="assets/panneaux.png">
                    <p><span>Monciné</span><br>3 rue de la petite côte d'Armor<br>64600 Anglet</p>
                    <img src="assets/telephone.png">
                    <p><a href="tel:+33527292010">05 27 29 20 10</a></p>
                    <img src="assets/facebook-marron.png">
                    <p><a href="http://facebook.com/moncineANGLET/">cliquer ici</a></p>
                    <img src="assets/instagram-marron.png">
                    <p>MONCINE.ANGLET</p>
                    <img src="assets/x-marron.png">
                    <p>#MONCINEANGLET</p>
                </div>
            </aside>
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
            <aside class="cette_semaine">
                <div class="image_multiple gauche">
                    <img src="img/miami-vice-img-1.png" alt="Image tirée du film Miami Vice, où l'inspecteur Tubbs regarde la foule">
                    <img src="img/miami-vice-img-2.png" alt="Image tirée du film Miami Vice, où les deux inspecteurs arrivent sur le lieu du crime">
                    <img src="img/miami-vice-img-3.png" alt="Image tirée du film Miami Vice, où l'inspecteur Crockett est en pleine fusillade">
                </div>
                <div class="description_centrale">
                    <h2>Cette semaine...</h2>
                    <div>
                        <h3>Miami Vice</h3>
                        <p>Basée sur le feuilleton télévisé des années 1980, cette mise à jour se concentre sur les inspecteurs des moeurs Crockett et Tubbs, dont les vies personnelles et professionnelles respectives s'entremêlent dangereusement.</p>
                    </div>
                    <a href="#">Voir le détail</a>
                </div>
                <div class="image_etroite droite">
                    <img src="img/miami-vice.png" alt="Affiche de la série Miami Vice">
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