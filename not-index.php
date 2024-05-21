    <?php
        include("components/header.php");
    ?>
    <main>
        <?php
            include("components/slider.php");
        ?>
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