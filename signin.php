<!DOCTYPE html>
<html>
    <head>
        <title>Music for Life - Connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- Load header -->
        <?php include("header.html") ?>
        <div id="grid" class="padding border border-dark">
            <form name="connection-form">
                Pseudo: <input type="text" name="pseudo" autofocus required>
                <br>
                Mot de passe: <input type="password" name="password" required>
                <br>
                <button type="button" onclick="post('login')">Se connecter</button>
                <button type="button" onclick="post('signin')">S'enregistrer</button>
            </form>

            <?php
            if (isset($_POST["action"]) && !empty($_POST["action"]) && isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"])) {
                $action = htmlspecialchars($_POST["action"]);
                $username = htmlspecialchars($_POST["username"]);
                $password = htmlspecialchars($_POST["password"]);
                $file = 'test.json';
                $json = json_decode(file_get_contents($file));
                if ($action == "login") {
                    if (array_key_exists($username, $json)) {
                        if ($json->{$username} == $password) {
                            echo "<b>Mot de passe valide</b><br>";
                        } else {
                            echo "<b>Mot de passe invalide</b><br>";
                        }
                    } else {
                        echo "<b>Utilisateur inexistant</b><br>";
                    }
                } else if ($action == "signin") {
                    if (array_key_exists($username, $json)) {
                        echo "<b>Utilisateur déjà existant</b><br>";
                    } else {
                        $json->{$username} = $password;
                        file_put_contents($file, json_encode($json));
                    }
                }
            }
            ?>
        </div>

        <script>
            function post(action) {
                var form = document.forms["connection-form"];
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        document.documentElement.innerHTML = this.responseText;
                    }
                };
                xhttp.open("POST", "signin.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("action=" + action
                        + "&username=" + form["pseudo"].value
                        + "&password=" + form["password"].value);
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>