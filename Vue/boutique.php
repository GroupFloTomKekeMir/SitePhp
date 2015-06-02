<?php

include('header.php');
include('../php/connexionBdd.php');
?>
<html>
    <head>
        <title>Boutique</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>
    <body>

<div class="container" style="margin-left: auto; margin-right: auto;">
    <div class="row">
    <?php
    $query=$bdd->prepare('select article.id_article , article.nom, article.prix, article.description FROM article');
        $query->execute();
        
while ($row = $query->fetch()) {
    
     $query2=$bdd->prepare('select count(id_article) FROM article WHERE id_article = ? GROUP BY id_article');
        $query2->execute(array($row['id_article']));
        while ($row2 = $query2->fetch()) {
            //echo $row2['count(id_article)'];

    ?>
            <div class="col-lg-4 casting">
                <div class="thumbnail" class ="col-lg-3">
                    <img data-src="holder.js/300x300" >
                    <div class="caption">
                        <h3 id="<?php echo $row['id_article']; ?>"><?php echo $row['nom']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p>Prix : <?php echo $row['prix']; ?>€</p>           
                        <p>
                            <form method="post" action="">
                                <a href="../php/ajouterArticle.php" class="btn btn-primary">Ajouter au panier</a>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
    <?php
        }
        $select = array();
$select['id_article'] = $row['id_article'];
$select['nom'] = $row['nom'];
$select['prix'] = $row['prix'];
$select['description'] = $row['description'];
if(!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array();
    $_SESSION['panier']['nom'] = array();
    $_SESSION['panier']['prix'] = array();
    $_SESSION['panier']['description'] = array();
}
    }
    
    ?>
    </div>
</div>
</body>
</html>

<?php

$select = array();
$select['id_article'] = $row['id_article'];
$select['nom'] = $row['nom'];
$select['prix'] = $row['prix'];
$select['description'] = $row['description'];
echo $select['description'];
echo 'bonjou';
if(!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array();
    $_SESSION['panier']['nom'] = array();
    $_SESSION['panier']['prix'] = array();
    $_SESSION['panier']['description'] = array();
}


?>
<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>