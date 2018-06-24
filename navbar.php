<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <body>
        <!--<img id="imgAccueil" class="img-fluid" src="images/accueil.jpg" alt="image d'accueil">-->
        <nav class="navbar navbar-expand-sm justify-content-center sticky-top">    
            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">-->
            <ul class="navbar-nav">
                <li class="nav-item item1"><a class="nav-link darleston" href="index.php">A<span class="calibri-bar">ccueil</span></a></li>
                <li class="nav-item"><a class="nav-link darleston" href="cartes.php">C<span class="calibri-bar">artes</span></a></li>
                <li class="nav-item"><a class="nav-link darleston" href="menus.php">M<span class="calibri-bar">enus</span></a></li>
                    <?php
                    if (!isset($_SESSION["identifiant"])) {
                        echo "<li class=\"nav-item\"><a class=\"nav-link darleston\" href=\"admin.php\">A<span class=\"calibri-bar\">dmin</span></a></li>";
                    } else {
                        echo "<li class=\"nav-item\"><a class=\"nav-link darleston\" href=\"deconnexion.php\">D<span class=\"calibri-bar\">éconnexion</span></a></li>";
                    }
                    ?>
            </ul>
        </nav>
    </body>
</html>
