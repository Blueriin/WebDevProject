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
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/fois-gras.jpg" alt="fois-gras image">
                <div class="card-body">
                    <button type="button" onclick="openImage('image', 'imagescarte/Capture1.png')" class="btn btn-primary darleston brown">Les galettes</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/fermiere.jpg" alt="salade image">
                <div class="card-body">
                    <button type="button" onclick="" class="btn btn-primary darleston brown">Les salades</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/bierres.jpg" alt="boissons image">
                <div class="card-body">
                    <button type="button" onclick="" class="btn btn-primary darleston brown">Les boissons</button>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/cidres.jpg" alt="cidres image">
                <div class="card-body">
                    <button type="button" onclick="" class="btn btn-primary darleston brown">Les cidres et les vins</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/parvis.jpg" alt="parvis image">
                <div class="card-body">
                    <button type="button" onclick="" class="btn btn-primary darleston brown">Les crêpes</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Photos crêperie/chocolat-liegeois.jpg" alt="glace image">
                <div class="card-body">
                    <button type="button" onclick="" class="btn btn-primary darleston brown">Les glaces</button>
                </div>
            </div>
        </div>
        <div id="image"></div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
