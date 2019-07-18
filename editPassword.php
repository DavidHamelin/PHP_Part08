<?php
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
        <h1>Modification de vos identifiants</h1>
        <!-- Ex 04 -->
        <?php
        echo '<br/> Votre pseudo : ' . $_COOKIE['pseudo'] . '<br/> Votre mot de passe : ' . $_COOKIE['mdp']; 
        ?>

        <form class="container" method="post" action="editPassword.php">
            <label for="login">Nouvel Identifiant</label>
            <input type="text" id="login" name="login"/>
            <label for="password">Nouveau Mot de Passe</label>
            <input type="password" id="password" name="password"/>
            <input class="btn" type="submit" id="send" value="Envoyer"/>
        </form>
        <br/>
        <a class="btn" href="index.php">Retour à la page d'accueil</a> <br/>
    </body>
</html>