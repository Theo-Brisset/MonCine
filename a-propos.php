<?php
    include_once("components/header.php");
?>
    <main>
        <?php
            include_once("components/slider.php");
        ?>
        <section class="a-propos">
            <h1 class="no_style">A propos</h1>
            <section class="historique">
                <h3>Historique, un journal de cinématographie</h3>
                <p><span>MonCiné</span> est fondée par V. Marchand le 22 février 1921 avec le soutien du groupe de presse Offenstadt. Il s'agit alors de l'hebdomadaire le moins cher et le plus populaire du cinéma muet. Son succès est immédiat. Il est imprimé par Crété à Corbeil.</p>
                <p>Chaque numéro présente deux films sous la forme de feuilletons, adaptés par des spécialistes comme Maurice Bessy ou Fabrice Delphi, un film en image sur une double page, des échos, une présentation des nouveaux films, et parfois un entretien avec un auteur ou un réalisateur, un article sur un aspect technique ou sur un métir du cinéma.</p>
                <p><span>MonCiné</span> défend le cinéma français et populaire.</p>
                <div class="note" aria-label="Un cinéma 4 étoiles !">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-grise.png" alt="">
                </div>
                <p class="exergue">&#171; Le cinéma ressemble à un musée, c'est magnifique et l'on s'y sent bien ! &#187;</p>
            </section>
            <aside class="affiche">
                <img src="img/affiche-moncine.png" alt="Sur l'affiche du 3 décembre 1925 de MonCiné, l'actrice Choura Miléna était à l'honneur">
            </aside>
            <aside class="visuelSalle">
                <img src="img/scene.png" alt="Le cinéma MonCiné dispose d'une scène de théâtre">
                <img src="img/sieges.png" alt="Les sièges de la salle principale sont d'époque, ils datent de 1920">
                <img src="img/projection.png" alt="L'écran de la salle est assez grand, 5m de large et 2,5m de hauteur">
            </aside>
            <section class="explicationCinema">
                <h3>Un cinéma de quartier</h3>
                <p>D'abord conçu comme une salle de spectacle accueillant des spectacles de variétés, de théâtre ou de concerts, c'est le 14 octobre 1895 que ce théâtre à l'italienne, avec sa façade jaune ocre et ses mosaïques sublimes (entièrement reconstruire parce que l'originale ne peut être retouchée) accueille sa première projection de cinéma. Ce jour-là, les frères Lumière organisent une des premières projections cinématographiques privées. Louis Lumière venait de tourner une vingtaine de ses vues photographiques animées dans la ville et il voulait les projeter sur place.</p>
                <p>A partir du 21 mars 1899, Raoul Gallaud, le propriétaire de la salle, diffusa régulièrement des films Lumière en alternance avec d'autres programmes de divertissement. Plus tard, de jeunes artistes comme Bernard Blier ou Fernandel firent leurs premiers pa sur cette même scène où se mêlait music-hall et cinéma. Avec le déclin du port, le cinéma était menacé, mais le classement de la salle en 1996 à l'inventaire des Monuments Historiques l'a définitivement préservée des éventuels projets  de transformation ou de destruction.</p>
                <p>Le cinéma de quartier <span>MonCiné</span> est une salle unique art-déco permettant de voir ou de revoir, des films cultes et importants n'étant plus disponibles dans les salles de cinéma du moment. Des accords spéciaux avec les distributeurs pour des films qui ne sont plus distribués en salle nous permettent de les afficher  à nouveaux à des tarifs abordables :</p>
                <ul class="tarifs">
                    <li>Tarifs adultes : 5€</li>
                    <li>Tarifs  enfants (moins de 12 ans) et étudiants : 3€</li>
                    <li>Abonnement série (une saison ou 18 épisodes) : 36€</li>
                </ul>
                <div class="note" aria-label="Un cinéma 4 étoiles !">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-orange.png" alt="">
                    <img src="assets/etoile-grise.png" alt="">
                </div>
                <p class="exergue">&#171; Je n'allais plus au cinéma car je n'aimais plus ce  qui y été proposé, je redécouvre le plaisir du cinéma ! &#187;</p>
            </section>
        </section>

        <section class="decouvrir">
            <?php
                include("components/aside_serie.php");
                include("components/aside_films.php");
            ?>
        </section>
    </main>
    <?php
        include("components/footer.php");
    ?>
</body>
</html>