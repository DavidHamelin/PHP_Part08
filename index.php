<?php
    session_start();
    $_SESSION['lastname'] = 'Depardieu';
    $_SESSION['firstname'] = 'Gérard';
    $_SESSION['age'] = '70';
if (isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    setcookie('pseudo', $login, time() + 365*24*3600, null, null, false, true);
    setcookie('mdp', $password, time() + 365*24*3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title> Php Partie 08 </title>
        
    </head>
    <body>

        <h1>Php - Part 08</h1>

        <?php
        // Ex 01
        echo '<h3> Ex 01 </h3>';
        // Afficher le contenu d'une superglobale :
        // print_r($_SERVER);
        echo '<br/> User Agent : ' . $_SERVER[HTTP_USER_AGENT] . 
        '<br/> Adresse IP : ' . $_SERVER[SERVER_ADDR] . 
        '<br/> Nom du serveur : ' . $_SERVER[SERVER_SOFTWARE];

        // Ex 02
        echo '<h3> Ex 02 </h3>';
        ?>
        <a href="page02.php">Lien vers autre page</a> <br/>
        <?php
        print_r($_SESSION);
        ?>

        <!-- Ex 03 -->
        <h3> Ex 03 </h3>
        <form class="container" method="post" action="index.php">
        <label for="login">Identifiant</label>
        <input type="text" id="login" name="login"/>
        <label for="password">Mot de Passe</label>
        <input type="password" id="password" name="password"/>
        <input class="btn" type="submit" id="send" value="Envoyer"/>
        </form>
        
        <!-- Ex 04 -->
        <h3> Ex 04 </h3>
        <?php
        // print_r($_COOKIE);
        echo 'Infos du formulaire posté : <br/>' . $_POST['login'] . '<br/>' . $_POST['password']; 

        echo '<br/> Votre pseudo : ' . $_COOKIE['pseudo'] . '<br/> Votre mot de passe : ' . $_COOKIE['mdp']; 
        ?>

        <!-- Ex 05 -->
        <h3> Ex 05 </h3>
        <a class="btn" href="editPassword.php">Modifier mes identifiants </a>
        <br/>
        <br/>

        <!-- jQuery -->
        <script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous">
        </script>
        <!-- Materialize JS -->
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
        </script>
        <!-- Script pour dropdownList Materialize -->
        <script>
            $(document).ready(function(){
            $('select').formSelect();
            });
        </script>
    </body>
</html>