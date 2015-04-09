<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>

<div class="container" style="background-color : #fff;">

    <h3> Mes informations personnelles </h3>
    <div id="test"></div>
    <hr>
    <?php
    $query = $bdd->prepare('SELECT `id_util`, `login`, `password`, `nom`, `prenom`, `nom_artiste`, `age`, `mail`, `telephone`, `id_adresse`, `descr_util` FROM `utilisateur` WHERE id_util = ?');
    $query->execute(array($_SESSION['id']));

    while ($row = $query->fetch()) {
        $query = $bdd->prepare('SELECT `numero`, `code_postal`, `rue`, `ville`, `latitude`, `longitude` FROM `adresse` WHERE `id_adr`= ?');
        $query->execute(array($row['id_adresse']));
        while ($row2 = $query->fetch()) {
            ?>
            <input type="hidden" id="id_util" value="<?php echo $_SESSION['id'] ?>" />
             <input type="hidden" id="id_adr" value="<?php echo $row['id_adresse'] ?>" />
            <div class="row">
                <div class="col-lg-1">
                    <label for="nom">Nom:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="nom" value="<?php echo $row['nom'] ?>" />
                </div>


            </div>
            <div class="row">
                <div class="col-lg-1">
                    <label for="prenom">Prenom:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="prenom" value="<?php echo $row['prenom'] ?>" />
                </div>

            </div>
            <div class="row">
                <div class="col-lg-1">
                    <label for="nom_artiste">Nom d'artiste:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="nom_artiste" value="<?php echo $row['nom_artiste'] ?>"/>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-1">
                    <label for="age">Age:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="age" value="<?php echo $row['age'] ?>"/>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-1">
                    <label for="mail">Mail:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="mail" value="<?php echo $row['mail'] ?>"/>  
                </div>

            </div>
            <div class="row">
                <div class="col-lg-1">
                    <label for="telephone">Telephone:</label>
                </div>
                <div class="col-lg-2">
                    <input type="text" id="telephone" value="<?php echo $row['telephone'] ?>"/>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-1">
                    <label for = "adresse">Adresse: </label>
                </div>
                <div class="col-lg-4 " id= "numerobouton"> 
                    <input name="numero" id="numero" type="text" step="1" placeholder="n°" value="<?php echo $row2['numero'] ?> " style="width: 40px;"/>                             
                    <input name="adresse" id="adresse" type="text" placeholder="rue" value="<?php echo $row2['rue'] ?> " style="width: 140px;">
                    <input name="CP" id="CP" type="text" placeholder="CP" value="<?php echo $row2['code_postal'] ?>" style="width: 140px;">
                    <input name="ville" id="ville" type="text" placeholder="ville   " value="<?php echo $row2['ville'] ?>" style="width: 140px;">
                </div>

            </div>
            <div class="row">

                <div class="col-lg-1">
                    <label for="password">Mot de passe:</label> 
                </div>
                <div class="col-lg-2">
                    <input id ="password" type="password">
                </div>
            </div>
            <div class="row">

                <div class="col-lg-1">
                    <label for="password2">Confirmer:</label>
                </div>
                <div class="col-lg-2">
                    <input id="password2" type="password"> 
                </div>
            </div>

            <h3>Description</h3>
            <hr>

            <textarea id="description"> <?php echo $row['descr_util'] ?></textarea>
        <?php
    }
}
?>
    <br/><br/><br/>
    <div class="row">
        <div col-lg-1>
            <button class="valider">Valider</button>
        </div>

    </div>



</div>

<script>

    $(document).ready(function () {



        $(".valider").click(function () {

            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var nom_artiste = $("#nom_artiste").val();
            var age = $("#age").val();
            var telephone = $("#telephone").val();
            var mail = $("#mail").val();
            var password = $("#password").val();
            var password2 = $("#password2").val();
            var description = $("#description").val();
            var id_util = $("#id_util").val();
            var id_adr = $("#id_adr").val();
            var numero = $("#numero").val();
            var adresse = $("#adresse").val();
            var CP = $("#CP").val();
            var ville = $("#ville").val();



            $.ajax({
                method: "GET",
                url: "../php/validerprofil.php",
                data: {id_util: id_util, nom: nom, prenom: prenom, nom_artiste: nom_artiste, age: age, telephone: telephone, mail: mail, password: password, password2: password2, description: description, numero: numero,adresse:adresse,CP:CP,ville:ville,id_adr : id_adr},
                dataType: 'html',
                success: function (data) {

                    $("#test").html(data);
                }

            });

        })
    });


</script>
