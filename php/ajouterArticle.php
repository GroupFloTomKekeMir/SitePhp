<?php
function ajout($select)
{
    array_push($_SESSION['panier']['id_article'],$select['id']);
    array_push($_SESSION['panier']['qte'],$select['qte']);
    array_push($_SESSION['panier']['taille'],$select['taille']);
    array_push($_SESSION['panier']['prix'],$select['prix']);
} 
?>