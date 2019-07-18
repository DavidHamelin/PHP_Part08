<?php
    session_start();

    // setcookie('pseudo', $_POST['login'], time() + 365*24*3600, null, null, false, true);
    // setcookie('mdp', $_POST['password'], time() + 365*24*3600, null, null, false, true);
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
        <title> Php Partie 08 - page 02 </title>
        
    </head>
    <body>

        <h1>Page II</h1>
        <!-- Ex 02 -->
        <h5>
        <?php
        echo 'Bonjour ' . $_SESSION['firstname'] . ' ' .  $_SESSION['lastname'] . ' ! <br/>
         Vous avez : ' . $_SESSION['age'] . 'ans.';
        ?>
        </h5>
        <!-- Ex 04 -->
        <?php
        echo '<br/> Votre pseudo : ' . $_COOKIE['pseudo'] . '<br/> Votre mot de passe : ' . $_COOKIE['mdp']; 
        ?>

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