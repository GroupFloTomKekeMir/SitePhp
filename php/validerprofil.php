<?php

include('connexionBdd.php');

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$mail = $_GET['mail'];
$telephone = $_GET['telephone'];
$password = $_GET['password'];
$password2 = $_GET['password2'];
$description = $_GET['description'];
$age = $_GET['age'];
$nom_artiste = $_GET['nom_artiste'];
$id_util = $_GET['id_util'];
$id_adr = $_GET['id_adr'];
$numero = $_GET['numero'];
$adresse = $_GET['adresse'];
$CP = $_GET['CP'];
$ville = $_GET['ville'];

if ($nom != "" && $prenom != "" && $mail != "" && $telephone != "" && $description != "" && $age != "" && $nom_artiste != "" && $numero != "" && $adresse != "" && $CP != "" && $ville != "") {

    if ($password != "" && $password2 != "" && $password == $password2) {






        $query = $bdd->prepare('UPDATE `utilisateur` SET `password`=?,`nom`=?,`prenom`=?,`nom_artiste`=?,`age`=?,`mail`=?,`telephone`=?,`descr_util`=? WHERE `id_util`=?');
        $query2 = $bdd->prepare('UPDATE adresse SET numero = ? , rue = ? , code_postal = ? , ville = ? WHERE id_adr = ?');
        try {
            $query->execute(array($password, $nom, $prenom, $nom_artiste, $age, $mail, $telephone, $description, $id_util));
            $query2->execute(array($numero,$adresse,$CP,$ville,$id_adr));
            echo "UPDATE ok";
        } catch (Exception $ex) {
            echo 'UPDATE fail';
        }
    } else if ($password == "" && $password2 == "") {

        $query = $bdd->prepare('UPDATE `utilisateur` SET `nom`=?,`prenom`=?,`nom_artiste`=?,`age`=?,`mail`=?,`telephone`=?,`descr_util`=? WHERE `id_util`=?');
        $query2 = $bdd->prepare('UPDATE adresse SET numero = ? , rue = ? , code_postal = ? , ville = ? WHERE id_adr = ?');
        try {
            $query->execute(array($nom, $prenom, $nom_artiste, $age, $mail, $telephone, $description, $id_util));
            $query2->execute(array($numero,$adresse,$CP,$ville,$id_adr));
            echo "UPDATE ok";
        } catch (Exception $ex) {
            echo 'UPDATE fail';
        }
    } else {
        echo 'Password != password2';
    }
} else {
    echo "Un des champs est vide ! ";
}
    


