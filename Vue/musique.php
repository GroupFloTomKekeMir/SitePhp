<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Musique</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>
    <body>

<div class="row titreMusique">
    <div class="col-lg-offset-3 col-lg-6">
        <h1>Musique</h1>
    </div>
</div>
<div class="row rechercheMusique">     
    <div class="col-lg-offset-3 col-lg-6">    
        <div class="row">            
            <div class="col-lg-2">            
                <p id="recherche">Recherche </p>       
            </div>    
            <form method="POST" action="">
                <div class="col-lg-1">
                    <label for = "recherche_artiste">Artiste </label>                
                </div>    
                <div class="col-lg-1">
                    <input type="text" id="recherche_artiste" name="recherche_artiste"/>                 
                </div>  
                <div class="col-lg-offset-2 col-lg-1">
                    <label for = "recherche_titre">Titre </label>                
                </div>    
                <div class="col-lg-1">
                    <input type="text" id="recherche_titre" name="recherche_titre"/>                 
                </div> 
                <div class="col-lg-offset-2 col-lg-1">
                    <input type="submit" id="submit" name="submit"/>                 
                </div> 
            </form>
        </div> 


        <div class="row">
            <div class="col-lg-2">
                <p id="affichage"> Affichage </p>
            </div>
            <div class="col-lg-3">
                <input type="radio" name="groupe1" value="1"> Plus populaire
            </div>
            <div class="col-lg-3">
                <input type="radio" name="groupe1" value="1"> Plus ancienne
            </div>
            <div class="col-lg-3">
                <input type="checkbox" name="choix1" value="1"> Nouveauté
            </div>
            <div class="col-lg-3">
                <input type="checkbox" name="choix1" value="1"> Genre
            </div>
        </div>
    </div>

</div>
<br/>
<div class="container" style="background-color : red;">
    <!--  <div class="row">
          <div col-lg-11>
              <div class="col-lg-3">
                  <iframe width="270" height="190" src="https://www.youtube.com/embed/zzXGkSxm4ws" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class=" col-lg-2">
                  <p>Musique</p>
              </div> 
              <div class=" col-lg-2">
                  <p>Rap</p>
              </div> 
              <div class=" col-lg-2">
                  <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Proin luctus magna sit amet justo ultricies tristique. Nibus eros eget imperdiet tempor. Etiam pretium erat non ipsum sodales posuere. Maecenas eu bibendum arcu, sed aliquam arcu.</p>
              </div> 
              <div class=" col-lg-2">
                  <p>20/08/088</p>
              </div> 
          </div>
      </div>-->
    <!------------------------------------>
    <!------------------------------------>


    <?php
    $query = $bdd->prepare('SELECT `id_musique`, `titre`, `description`, `genre`, `date_ajout`, `lien_yt`, `id_utilisateur` FROM `musique`');
    $query->execute();

    while ($row = $query->fetch()) {
        ?>  


        <div class="row corpsMusique">
            <div class="col-lg-offset-2 col-lg-3">
                <iframe src="https://<?php echo $row['lien_yt'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <div class="row">           
                    <div class="col-lg-offset-1 col-lg-10">
                        <p><?php echo $row['titre'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10">
                        <p>#<?php echo $row['genre'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10">
                        <p><?php echo $row['description'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10">
                        <p>Date d'ajoût : <?php echo $row['date_ajout'] ?></p>
                    </div>                    
                </div>


                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 traitMusique"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 traitMusique"></div>
            </div>
        </div>
        <?php
    }
    ?>

</div>
</body>
</html>