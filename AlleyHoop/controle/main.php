<?php
    session_start(); 

    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['pseudo'] = 'Pseudo';
    $_SESSION['pass'] = 'Mot de passe';
    $_SESSION['connecter'] = 0;
?>


<!-- # Page de connection --> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Alley Hoop - Le Site de jeu de basketball</title>     
        <link rel="stylesheet" href="../view/style.css" />      <!-- Indique le Style css utilisé -->     
    </head>

    <!-- Ici le contenu de l'en-tête de votre page -->
    <header>
        <p>Alley Hoop - Le Site de jeu de basketball</p>
    </header>

    <!-- Ici le menu positionné en latéral droit --> 
    <nav id = "menu">    
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


    <!-- Ici le pied de page du site --> 
    <footer>
        <a href="pied">A propos de Alley Hoop</a>
    </footer>

</html>



            
     