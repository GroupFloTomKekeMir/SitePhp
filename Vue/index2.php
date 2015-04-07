<?php session_start(); include('header.php'); ?>
  <div class="container">
	<div class="row">
      <div class=" col-lg-12">
        
        <div class="panel">
        <div class="panel-body">
          Bienvenue ! Megacasting se charge de regrouper les offres de castings, les musiques, les évènements et les spectacles publiés par des annonceurs et des diffuseurs.
                      <?php /*session_start();*/ var_dump($_SESSION) ?>
        </div>
        </div>
        
      </div>
  	</div>
  </div>






  <div class="container">
    <div class="row">
      <div class="col-lg-offset-1 col-lg-3" style="background-color : #fff">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3" style="background-color : #fff">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3" style="background-color : #fff">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>        
    </div>
      <br/>
      <div class="row">
<div class="col-lg-offset-1 col-lg-3" style="background-color : #fff; margin-top: 80px">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3" style="background-color : #fff; margin-top: 80px">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3" style="background-color : #fff; margin-top: 80px">
        <div class="caption">
            <h3>Musiques</h3>
            <p>Annonces pour les musiciens</p>
            <form method="POST">
                <p><a href="servlet_musique" class="btn btn-primary" role="button">En savoir plus</a></p>
            </form>
        </div>
      </div>               
          
      </div> 
  </div>
        
    </body>
    
</html>
<script>
        $(document).ready(function() {
            $('#sidebar').affix({
      offset: {
        top: 240
      }
});	

});
</script>