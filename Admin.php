<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>WebDev Project</title>
        <?php
        include ("navbar.html")
        ?>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_POST["identifiant"]) && isset($_POST["mdp"]) && !empty($_POST["identifiant"]) && !empty($_POST["mdp"])) {
            $identifiant = htmlspecialchars($_POST["identifiant"]);
            $mdp = htmlspecialchars($_POST["mdp"]);
            $file = 'json/identifiant.json';
            $json = json_decode(file_get_contents($file));
            if (array_key_exists($identifiant, $json)) {
                if ($json->{$identifiant} == $mdp) {
                    $_SESSION["identifiant"] = $identifiant;
                     header('Location: index.php');
                } else {
                    echo "<b>Mot de passe invalide</b><br>";
                }
            } else {
                echo "<b>Utilisateur inexistant</b><br>";
            }
        }
        ?>

        <div >
            <form name="connection-form">
                Identifiant: <input type="text" name="identifiant" autofocus required>
                <br>
                Mot de passe: <input type="password" name="mdp" required>
                <br>
                <button type="button" onclick="post()">Connexion</button>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="javascript.js"></script>  
    </body>
</html>
