<?php

session_start(); 

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = 'Pseudo';
$_SESSION['pass'] = 'Mot de passe';
$_SESSION['connecter'] = 0;
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Alley Hoop - Le Site de jeu de basketball</title>     
        <link rel="stylesheet" href="style.css" />      <!-- Indique le Style css utilisé -->     
    </head>

    <header>
    <!-- Ici le contenu de l'en-tête de votre page -->
        <p>Bienvenue sur <strong>Alley Hoop</strong>, le site de simulation de management d'une équipe de Basket</p>
    </header>

    <nav>
    <!-- Ici le menu positionné en latéral droit --> 
        <p>
            <strong>Menu</strong>
        </p> 
        <ul>
            <li><a href="main.php>">Accueil</a></li>             <!-- # Ne fonctionne pas -->  
            <li><a href="monequipe.php">Mon équipe</a></li>      <!-- # Page à construire -->  
            <li><a href="media.php">La presse</a></li>           <!-- # Page à construire --> 
            <li><a href="transfert.php">Transfert</a></li>       <!-- # Page à construire -->  
            <li><a href="finance.php">Finance</a></li>           <!-- # Page à construire -->  
        </ul>
    </nav>

    <!-- On inclus le questionnaire d'inscription si l'utilisateur n'a pas renseigné ses identifiants-->
    <?php 
        if($_SESSION['connecter'] < 1)                        // On vérifie si l'utilisateur est connecté pour savoir si on lui affiche le formulaire de connection 
            {
             include("connection.php");
             echo "connecter = ".$_SESSION['connecter'];
            }
        if ($_SESSION['connecter'] > 0)    
            {
            echo $_POST['pseudo'];
            }

    ?>

    <footer>
    <!-- Ici le pied de page du site --> 
        <p>Copyright Alley Hoop - Tous droits réservés<br />
        <a href="#">Me contacter !</a></p>
    </footer>
            
</html>