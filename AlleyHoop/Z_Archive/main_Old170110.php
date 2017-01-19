<?php
    session_start(); 
    // Rappel variables de session
    $_SESSION['pseudo']=0;
    $_SESSION['pass']=0;
    $_SESSION['connecter']=0;
    $_SESSION['IdUser']=0;
    $_SESSION['IdEquipe'] = 0;
    $_SESSION['NomEquipe'] = 0;

    if (isset($_SESSION['pseudo']))  
            {try // Tentative d'accéder à la base de données
                 {
                     $bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', 'P@n0ram!x');
                 }
                 catch(Exception $e)
                 {
                     die('Erreur : '.$e->getMessage());
                 }
            }
     
             // Récupérer en BDD l'IdEquipe de l'utilisateur
             $Equipe = $bdd->prepare('SELECT * FROM equipe WHERE IdUsers = ?');
             $Equipe -> execute (array($_SESSION['IdUser']));   // il s'agit du Iduser récupérer lors de la connection

             // On récupère l'Id et le nom de l'équipe
             while ($TabEquipe = $Equipe->fetch())
                {
                // On renseigne les variables des sessions liées à l'utilisateurs
                    $_SESSION['IdEquipe'] = $TabEquipe[0];
                    $_SESSION['NomEquipe'] = $TabEquipe[1];
                }

            // Récupérer en BDD l'Id et les caractéristiques des joueurs
             $Joueur = $bdd->prepare('SELECT Id , NomJoueur FROM joueurs WHERE IdEquipe = ?');
             $Joueur -> execute (array($_SESSION['IdEquipe']));   // il s'agit du IdUser récupérer lors de la connection

             // On récupère l'Id et le nom de l'équipe
             $nbJoueursEquipe = 0;
             while ($TabJoueur = $Joueur->fetch())
                {
                // On renseigne les variables des sessions liées à l'utilisateurs
                    $IdJoueur[$nbJoueursEquipe] = $TabJoueur['Id'];
                    $NomJoueur[$nbJoueursEquipe] = $TabJoueur['NomJoueur'];
                    $nbJoueursEquipe = $nbJoueursEquipe + 1;                   
                }   
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
        <!-- Ici le menu positionné en latéral gauche --> 
        <nav id = "menu">    
            <p>
                <strong>Menu</strong>
            </p> 
            <ul>
                <li><a href="main.php>">Accueil</a></li>
                <li><a href="monequipe.php">Mon équipe</a></li>      <!-- # Page à construire -->
                <li><a href="match.php">Les matchs</a></li>      <!-- # Page à construire -->         
                <li><a href="media.php">La presse</a></li>           <!-- # Page à construire --> 
                <li><a href="transfert.php">Transfert</a></li>       <!-- # Page à construire -->  
                <li><a href="finance.php">Finance</a></li>           <!-- # Page à construire -->  
            </ul>

            <!-- On inclus le questionnaire d'inscription si l'utilisateur n'a pas renseigné ses identifiants-->
            <?php 
                if($_SESSION['connecter'] < 1)                        // On vérifie si l'utilisateur est connecté pour savoir si on lui affiche le formulaire de connection 
                    {
                     include("connexion.php");
                     echo "Test";
                    }
                else    
                    {
                    echo $_POST['pseudo'];
                     echo "TTTTTT";                    
                    }
            ?>
        </nav>

        <!-- JS --> 
        <!-- Récupération du fichier des fonctions JS --> 
        <script src="JS\joueurs.js"></script>
     </body>

    <!-- Ici le pied de page du site --> 
    <footer>
        <a href="pied">A propos de Alley Hoop</a>
    </footer>

</html>