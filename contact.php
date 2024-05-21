<?php
    include_once("components/header.php");
?>
    <main>
        <?php
            include_once("components/slider.php");
        ?>
        <section class="contact">
            <h1 class="no_style">Contact</h1>
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
            <?php
                include("components/aside_serie.php");
                include("components/aside_film_semaine.php");
            ?>
        </section>
    </main>
    <?php
        include("components/footer.php");
    ?>
</body>

</html>