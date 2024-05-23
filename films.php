<?php
        include("components/header.php");
    ?>
    <main>
        <section class="films">
            <h1>Les films du mois</h1>
            <div class="presentation-liste-films">
                <p><span>MonCiné</span> propose un nouveau film toutes les semaines. Chaque film est projeté en version française sous-titrée ainsi qu'en version originale, 1 fois par semaine.</p>
                <p>Le film reste disponible durant 4 semaines. Pour la description ainsi que les horaires, cliquez sur le film de votre choix.
            </div>
            <div class="liste-films">
                <div class="element-liste-films">
                    <a href="" class="lien-film">
                        <img src="/MonCine/img/the-messenger.png" alt="Aller voir les informations sur le film The Messenger">
                        <p>The Messenger</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/florida-project.png" alt="Aller voir les informations sur le film The Florida project">
                        <p>The Florida project</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="infos/zero_dark_thirty.php" class="lien-film">
                        <img src="/MonCine/img/zero-dark-thirty.png" alt="Aller voir les informations sur le film Zero Dark Thirty">
                        <p>Zero Dark Thirty</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/shaun-of-the-dead.png" alt="Aller voir les informations sur le film Shaun of the dead">
                        <p>Shaun of the dead</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/take-shelter.png" alt="Aller voir les informations sur le film Take Shelter">
                        <p>Take Shelter</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/miami-vice.png" alt="Aller voir les informations sur le film Miami Vice">
                        <p>Miami Vice</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/insidious.png" alt="Aller voir les informations sur le film Insidious">
                        <p>Insidious</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/elephant.png" alt="Aller voir les informations sur le film Elephant">
                        <p>Elephant</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/gerry.png" alt="Aller voir les informations sur le film gerry">
                        <p>gerry</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/3-10-to-yuma.png" alt="Aller voir les informations sur le film 3:10 to Yuma">
                        <p>3:10 to Yuma</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/dallas-buyers-club.png" alt="Aller voir les informations sur le film Dallas Buyers Club">
                        <p>Dallas Buyers Club</p>
                    </a>
                </div>
                <div class="element-liste-films">
                    <a href="#" class="lien-film">
                        <img src="/MonCine/img/rampart.png" alt="Aller voir les informations sur le film Rampart">
                        <p>Rampart</p>
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