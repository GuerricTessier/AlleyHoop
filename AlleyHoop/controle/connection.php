<?php
    session_start(); 

    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['pseudo'] = 'Pseudo';
    $_SESSION['pass'] = 'Mot de passe';
    $_SESSION['connecter'] = 0;

   if (isset($_POST['pseudo']))  
       {try // Tentative d'accéder à la base de données
            {
                $bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

        // Vérification Login et MdP en base
        $requete = $bdd->prepare('SELECT Id FROM users WHERE Pseudo = ? and MotDePasse = ?'); 
        $requete-> execute (array(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['pass'])));
        $nbLignes = 0;
        while ($IdUser = $requete->fetch())
            {
            echo $IdUser[$nbLignes];   
            $nbLignes = $nbLignes +1;         
            }

        if ($nbLignes > 0)
            {
            $_SESSION['connecter'] = 1;
            echo $nbLignes;
            echo $_SESSION['connecter'];
            echo $IdUser[0];
            echo $IdUser[1];
            echo $IdUser;
            echo ("FCK");
            //echo $_SESSION['connecter'];
            //header('Location: main.php');
            exit();
            }
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

    <!-- Ici le contenu du questionnaire de connection -->
    <form id = "inscription" method="post">
        <legend id = "legende">Connection : </legend>
        <p>
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" />
        </p> 
        <p>
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="pass" id="pass" />
        </p>       
        <p>
            <input class="inscr" type="submit" value="Envoyer" />
        </p>  
        <p>
        <a href="inscription.php">S'inscrire</a> <br>
        <a href="oublie.php">Mot de passe oublié</a>         <!-- # Page à construire -->         
        </p>   
    </form> 

    <!-- Ici le pied de page du site --> 
    <footer>
        <a href="pied">A propos de Alley Hoop</a>
    </footer>

</html>



            
     