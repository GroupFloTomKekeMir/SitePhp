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
echo "testttt" . $id_util;

if ($password != "" && $password2 != "" && $nom != "" && $prenom != "" && $mail != "" && $telephone != "" && $description != "" && $age != "" && $nom_artiste != "") {
    if ($password == $password2) {
        
        
        
        
        
        
     $query=$bdd->prepare('UPDATE `utilisateur` SET `password`=?,`nom`=?,`prenom`=?,`nom_artiste`=?,`age`=?,`mail`=?,`telephone`=?,`descr_util`=? WHERE `id_util`=?');
        try {
               $query->execute(array($password,$nom,$prenom,$nom_artiste,$age,$mail,$telephone,$description,$id_util));
                echo "UPDATE ok";
        } catch (Exception $ex) {
            echo 'UPDATE fail';
        }
     
        
        
    }else {
        echo 'Password != password2';
    }
    
} else {
    echo "Un des champs est vide ! ";
}
    


