<?php
session_start();
include('header.php');
include('../php/connexionBdd.php');

$id_metier = $_GET['id_metier'];

$query = $bdd->prepare('select id_offre , titre , reference , date_debut_publi , fin_publi , nbr_poste , descr_poste , descr_profil, duree_contrat , id_contrat , id_annonceur , id_diffuseur  FROM offre WHERE id_metier = ?');
$query->execute(array($id_metier));

while ($row = $query->fetch()) {
    ?>
    <div class="container"  style="margin-left: 40%; margin-right: 40%; text-align: center;">
        <div class="row">
            <div class="col-lg-3">
                <li> <p> Titre :</p></li>                       
                <li> <p> Métier :   <?php echo $id_metier ?></p> </li>
                <li> <p> Contrat :  <?php echo $row['id_contrat'] ?> </p> </li>
                <li> <p> Référence :  <?php echo $row['reference'] ?> </p> </li>
                <li> <p> Nombre de poste : <?php echo $row['nbr_poste'] ?> </p> </li>
                <li> <p> Description du poste :  <?php echo $row['descr_poste'] ?> </p> </li>
                <li>  <p> Description du profil :   <?php echo $row['descr_profil'] ?> </p> </li>
                <li> <p> Diffuseur : <?php echo $row['id_diffuseur'] ?> </p> </li>

    <?php if (isset($_SESSION['id'])) { ?>
                    <button>Postuler</button>
                <?php } ?>
                <p> ------------------------------ </p>
            </div>
        </div> 
    </div>

    <?php
}
?>