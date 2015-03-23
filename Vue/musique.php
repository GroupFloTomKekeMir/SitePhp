<?php include('header.php'); ?>
        



<div class="row" style="margin-top: 150px;">     
                    <div id="moncadre" class="col-lg-offset-3 col-lg-6">    
                        <div class="row">            
                            <div class="col-lg-2">            
                                <p id="recherche">Recherche  </p>       
                            </div>    
                            <form method="POST" action="servlet_musique">
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
<div class="container" style="background-color : #fff;">
    Hello
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    
</div>