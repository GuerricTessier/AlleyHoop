<!-- # Page de main --> 
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


<?php
   if (isset($_POST['pseudo']))  
       {try // Tentative d'accéder à la base de données
            {
                $bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

        // Identifier l'IdEquipe de l'utilisateur
        $IdEquipe = $bdd->prepare('SELECT Id FROM equipe WHERE IdUser = ?');
        $IdEquipe -> execute (array($IdUser[0]));   // il s'agit du Iduser récupérer lors de la connection


        // Identifier les joueurs de l'utilisateurs
        /*$Joueurs = $bdd->prepare('SELECT * FROM joueurs WHERE IdEquipe = ?'); 
        $Joueurs-> execute (array(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['pass'])));
        while ($donnees = $requete->fetch())
            {
            $nbLignes = $nbLignes +1;         
            }

        if ($nbLignes > 0)
            {
            $_SESSION['connecter'] = 1;
            echo $_SESSION['connecter'];
            header('Location: main.php'); // Redirection a réaliser
            exit();
            }
        }*/
?>


            
     