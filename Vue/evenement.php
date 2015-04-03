<!DOCTYPE html>
<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    </head>
    <body>
        <!-- <div clas="row">-->
        <div class="col-lg-6">

            <?php
            $query = $bdd->prepare('SELECT `id_evenement`, `nom`, `description`, `date`, `id_adresse`, `id_annonceur` FROM `evenement`');
            $query->execute();

            while ($row = $query->fetch()) {
                ?>


                <h6><?php echo $row['nom'] ?> </h6>
                <h6><?php echo $row['description'] ?> </h6>
                <h6><?php echo $row['date'] ?> </h6>
                <button class="eve" value="<?php echo $row['id_evenement'] ?>">Voir</button>
                <p>---------------------------------</p>


                <?php
            }
            ?>

        </div>


        <div class="col-lg-6" id="map-canvas"></div>
        <!-- </div>-->
    </body>
</html>
<script>
    $(document).ready(function () {

        var map;
        var marker;
        function initialize() {
            var mapOptions = {
                zoom: 6,
                center: new google.maps.LatLng(46.8008243, 2.4357938)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
        }


        google.maps.event.addDomListener(window, 'load', initialize);
        $(".eve").click(function () {

            var valEvenement = $(this).val();
            alert(valEvenement);

            $.ajax({
                method: "GET",
                url: "../php/coordonnees.php",
                data: {query: valEvenement},
                dataType: 'html',
                success: function (data) {
                    
                    if(!marker) {
                       alert("il y a un marker"); 
                    } else {
                        alert("il n'y a pas de marker");
                        marker.setMap(null);
                    }
                      
                   
                 
                    var lat = data.substring(0, data.indexOf(' '));
                    var long = data.substring(data.lastIndexOf(' ') + 1);

                    var myLatlng = new google.maps.LatLng(lat,long);

                    marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'Hello World!'
                    });


                    //alert(data);
                }
            })









        });
    });
</script>  
<style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
    }
</style>