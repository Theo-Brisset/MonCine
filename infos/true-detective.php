<?php
        include("../components/header.php");
    ?>
    <main>
        <section class="detail-film">
            <div class="description-film">
                <h1>True Detective</h1>
                <div class="note" aria-label="Une série 4,5 étoiles !">
                    <img src="/MonCine/assets/etoile-orange.png" alt="">
                    <img src="/MonCine/assets/etoile-orange.png" alt="">
                    <img src="/MonCine/assets/etoile-orange.png" alt="">
                    <img src="/MonCine/assets/etoile-orange.png" alt="">
                    <img src="/MonCine/assets/etoile-moitie.png" alt="">
                </div>
                <div class="info-film">
                    <p>Série TV - 4 saisons - 2014</p>
                    <p>Crime Drama Mistery</p><br>
                    <p>Créé par Nic Pizzolatto</p>
                    <p>Avec <b>Woody Harrelson</b>, <b>Matthew McConnaughey</b></p>
                </div>
                <div class="synopsis">
                    <p>En 2012, deux détectives anciennement partenaires, Rust Cohle and Martin Hart reviennent sur leur toute première enquête ensemble impliquant un serial killer dans les années 1995.</p>
                </div>
                <div class="horaire">
                    <p>V.F : jeudi 04/01 20h30, vendredi 05/01 18h30, mercredi 10/01 14h00</p>
                    <p>V.O : vendredi 12/01 20h30, lundi 15/01 18h30, mercredi 17/01 14h00</p>
                </div>
            </div>
            <div class="affiche">
                <img src="/MonCine/img/true-detective.png" alt="Affiche de la série True Detective">
            </div>
            <ul class="vignettes">
                <li><img src="/MonCine/img/true-detective/vignette-1.png" alt="#"></li>
                <li><img src="/MonCine/img/true-detective/vignette-2.png" alt="#"></li>
                <li><img src="/MonCine/img/true-detective/vignette-3.png" alt="#"></li>
                <li><img src="/MonCine/img/true-detective/vignette-4.png" alt="#"></li>
                <li><img src="/MonCine/img/true-detective/vignette-5.png" alt="#"></li>
                <li><img src="/MonCine/img/true-detective/vignette-6.png" alt="#"></li>
            </ul> 
            <div class="commentaire">
                <p class="exergue">&#171; True Detective tape fort, très fort même ! &#187;</p>
                <p class="note">9/10</p>
            </div>
            <div class="resume-avis">
                <h2>Résumé</h2>
                <div class="resume">
                    <p>
                    En 2012, les inspecteurs Rust Cohle et Martin Hart, de la police d'État de Louisiane, sont amenés à réexaminer une affaire d'homicide sur laquelle ils ont travaillé en 1995.
                    Alors que l'enquête se déroule de nos jours à travers des interrogatoires séparés, les deux anciens détectives racontent l'histoire de leur enquête, rouvrant des blessures non cicatrisées et
                    remettant en question leur supposée résolution d'un étrange meurtre rituel  en 1995. 
                    Les lignes temporelles s'entrecroisent et convergent en 2012, alors que chaque homme est ramené dans un monde qu'il croyait avoir laissé derrière lui. 
                    En apprenant à se connaître et à connaître leur tueur, il devient évident que l'obscurité règne des deux côtés de la loi.
                    </p>
                </div>
                <h2>Avis</h2>
                <div class="avis">
                    <p>
                    Pour un premier épisode True Detective tape fort, très fort même. Tout est bon, acteurs, mise en scène, musiques. 
                    Matthew McConaughey et Woody Harrelson, nous délivrent des prestations hors-norme.
                    Surtout Matthew McConaughey qui crève l'écran. 
                    L'histoire est sombre, l'ambiance oppressant, ça change des vielles séries policière comme les experts.
                    On ne remarque même pas que c'est une série tellement c'est bien filmé et interprété, accompagné d'une excellente bande son. 
                    Enfin une histoire policière à la "Seven" La série promets de bons rebondissement avec je l'espère des épisodes aussi bons que celui là.
                    Si vous ne connaissez pas la série , je vous la conseille fortement. 
                    ENJOY!
                    </p>
                </div>
            </div>
        </section>
        <section class="decouvrir">
            <?php
                include("../components/aside_serie.php");
                include("../components/aside_film_semaine.php");
            ?>
        </section>
    </main>
    <?php
        include("../components/footer.php");
    ?>
</body>

</html>