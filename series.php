<?php
        include("components/header.php");
    ?>
    <main>
        <section class="films">
            <h1>Les séries du mois</h1>
            <div class="presentation-liste-films">
                <p><span>MonCiné</span> propose une nouvelle série toutes les semaines. Chaque série est projetée en version française sous-titrée ainsi qu’en version originale, 1 fois par semaine.</p>
                <p> La série reste disponible durant 4 semaines. Pour la description ainsi que les horaires, cliquez sur La série de votre choix.</p> 
            </div>
            <div class="liste-films">
                <div class="element-liste-films">
                    <a href="/MonCine/infos/true-detective.php" class="lien-film">
                        <img src="/MonCine/img/true-detective.png" alt="Aller voir les informations sur la série True Detective">
                        <p>True Detective</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/the-sopranos.png" alt="Aller voir les informations sur la série The Sopranos">
                        <p>The Sopranos</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/the-walking-dead.png" alt="Aller voir les informations sur la série The Walking Dead">
                        <p>The Walking Dead</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/the-wire.png" alt="Aller voir les informations sur la série The Wire">
                        <p>The Wire</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/homeland.png" alt="Aller voir les informations sur la série Homeland">
                        <p>Homeland</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/house-of-cards.png" alt="Aller voir les informations sur la série House of Cards">
                        <p>House of Cards</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/mr-robot.png" alt="Aller voir les informations sur la série Mr Robot">
                        <p>Mr Robot</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/ozark.png" alt="Aller voir les informations sur la série Ozark">
                        <p>Ozark</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/the-knick.png" alt="Aller voir les informations sur la série The Knick">
                        <p>The Knick</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/bates-motel.png" alt="Aller voir les informations sur la série Bates Motel">
                        <p>Bates Motel</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/breaking-bad.png" alt="Aller voir les informations sur la série Breaking Bad">
                        <p>Breaking Bad</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/dexter.png" alt="Aller voir les informations sur la série Dexter">
                        <p>Dexter</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="decouvrir">
            <?php
                include("components/aside_film_semaine.php");
            ?>
        </section>
    </main>
    <?php
        include("components/footer.php");
    ?>
</body>

</html>