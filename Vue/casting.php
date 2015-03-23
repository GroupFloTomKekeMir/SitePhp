<?php include('header.php'); ?>
<?php include('../php/countOffres.php') ?>

        <div class="row">
            <div class=" col-lg-2" style ="margin-top: 150px">
                <div class="thumbnail" class ="col-lg-3">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3>Musiciens</h3>
                        <p>Découvrez toutes les annonces pour les musiciens</p>
                        <p>Il y a <?php countMusiciens($bdd); ?> annonces</p>
                        <form method="POST" action="servlet_musiciens">
                            <!--<p><input type="submit" id="submit">En savoir plus</p>-->
                            <p><a href="servlet_musiciens" class="btn btn-primary" role="button">En savoir plus</a></p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2" style ="margin-top: 150px">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3>Danseurs</h3>
                        <p>Découvrez toutes les annonces pour les danseurs</p>
                        <p>Il y a <?php countDanseurs($bdd); ?> annonces</p>
                        <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>

            <div class=" col-lg-2" style ="margin-top: 150px">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3>Chorégraphes</h3>
                        <p>Découvrez toutes les annonces pour les chorégraphes</p>
                        <p>Il y a <?php countChoregraphes($bdd); ?> annonces</p>
                        <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-2" style ="margin-top: 80px">
                <div class="thumbnail" class ="col-lg-3">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3>Compositeurs</h3>
                        <p>Découvrez toutes les annonces pour les compositeurs</p>
                        <p>Il y a <?php countCompositeurs($bdd); ?> annonces</p>
                        <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2" style ="margin-top: 80px">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3>Réalisateurs</h3>
                        <p>Découvrez toutes les annonces pour les réalisateurs</p>
                        <p>Il y a <?php countRealisateurs($bdd); ?> annonces</p>
                        <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>

            <div class=" col-lg-2" style ="margin-top: 80px">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300">
                    <div class="caption">
                        <h3>Photographes</h3>
                        <p>Découvrez toutes les annonces pour les photographes</p>
                        <p>Il y a <?php countPhotographes($bdd); ?> annonces</p>
                        <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>
        </div>