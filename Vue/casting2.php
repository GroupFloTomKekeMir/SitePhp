<?php

include('header.php');
include('../php/connexionBdd.php');
?>
<html>
    <head>
        <title>Casting</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>
    <body>

<div class="container" style="margin-left: auto; margin-right: auto;">
    <div class="row">
    <?php
    $query=$bdd->prepare('select metier.id_metier , metier.libelle FROM metier');
        $query->execute();
        
while ($row = $query->fetch()) {
    
     $query2=$bdd->prepare('select count(id_metier) FROM offre WHERE id_metier = ? GROUP BY id_metier');
        $query2->execute(array($row['id_metier']));
        while ($row2 = $query2->fetch()) {
            //echo $row2['count(id_metier)'];

    ?>
            <div class="col-lg-4 casting">
                <div class="thumbnail" class ="col-lg-3">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3 id="<?php echo $row['id_metier']; ?>"><?php echo $row['libelle']; ?></h3>
                        <p>Découvrez toutes les annonces pour les <?php echo $row['libelle']; ?></p>
                        <p>Il y a <?php echo $row2['count(id_metier)']; ?> annonces</p>           
                        <p><a href="./offre.php?id_metier=<?php echo $row['id_metier']; ?>" class="btn btn-primary" role="button">En savoir plus</a></p>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    
    ?>
    </div>
</div>
</body>
</html>