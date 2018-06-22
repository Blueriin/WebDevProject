<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>WebDev Project</title>
        <?php

            /**
             * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
             */

            $username = "Utilisateur";
            $password = "motdepasse";

            if( isset($_POST['username']) && isset($_POST['password']) ){

                if($_POST['username'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...
                    session_start();
                    $_SESSION['user'] = $username;
                    echo "Success";    
                }
                else{ // Sinon
                    echo "Failed";
                }
            }
        ?>
    </head>
    <body>
        <div id="resultat">
            <!-- Nous allons afficher un retour en jQuery au visiteur -->
        </div>
         
            <h1>Un formulaire de connexion en AJAX</h1>

        <form>
            <p>
            Nom d'utilisateur : <input type="text" id="username" />
            Mot de passe : <input type="password" id="password" />
            <input type="submit" id="submit" value="Se connecter !" />
            </p>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        </body>


<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'admin.php', // Un script PHP que l'on va créer juste après
            {
                username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
            },
 
            function(data){
 
                if(data === 'Success'){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
 
                     $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
 
                     $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
         
            },
            'text'
         );
    });
});
</script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
</html>
