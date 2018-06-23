<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="javascript.js"></script>

        <title>WebDev Project</title>
        <?php
            include ("navbar.html")
        ?>
    </head>
    
    <body>      
        <div class="head brown darleston">La Crêperie du Parvis</div>
        <!--<hr>-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Photos crêperie/magret.jpg" alt="" class="mx-auto d-block homeImg"> 
                </div>
                <div class="carousel-item">
                    <img src="images/Photos crêperie/fermiere.jpg" alt="" class="mx-auto d-block homeImg">
                </div>
                <div class="carousel-item">
                    <img src="images/Photos crêperie/indienne.jpg" alt="" class="mx-auto d-block homeImg">
                </div>
                <div class="carousel-item">
                    <img src="images/Photos crêperie/texane.jpg" alt="" class="mx-auto d-block homeImg">
                </div>
                <div class="carousel-item">
                    <img src="images/Photos crêperie/isigny.jpg" alt="" class="mx-auto d-block homeImg">
                </div>
                <div class="carousel-item">
                    <img src="images/Photos crêperie/fleur-de-sel.jpg" alt="" class="mx-auto d-block homeImg">
                </div>
            
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>               
            </div>
        </div>
        <div class="center">
            <div class="presentation brown calibri">
            La crêperie du Parvis est un restaurant de galettes et crêpes bretonnes faites maison, qui vous propose également des salades
            et des sorbets et glaces pour le dessert. Les galettes à la carte sont aussi servies avec une salade verte. N'hésitez pas à 
            venir avec vos enfants, petits ou grands, un coin enfant a été aménagé pour eux ! 
            <br>De plus l'endroit est accessible pour les personnes à mobilité réduite, et le stationnement devant la crêperie est gratuit 
            entre 12h00 et 14h00 et le soir à partir de 19h00.
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
