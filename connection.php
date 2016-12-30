<?php
    session_start(); 

    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['pseudo'] = 'Pseudo';
    $_SESSION['pass'] = 'Mot de passe';
    $_SESSION['connecter'] = 0;
    $_SESSION['IdUser'] = 0;

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
        $requete = $bdd->prepare('SELECT * FROM users WHERE Pseudo = ?'); 
        $requete-> execute (array(htmlspecialchars($_POST['pseudo'])));
//$nbLignes = 0; => deprecated
        while ($TabUsers = $requete->fetch())
            {
            // On renseigne les variables des sessions liées à l'utilisateurs
            $_SESSION['IdUser'] = $TabUsers[0];
            $_SESSION['pseudo'] =  $TabUsers[1];
            $MdP_hash = $TabUsers[2];

//$nbLignes = $nbLignes +1; => deprecated
            }

            // On vérifie que le mot de passe hashé est bon avant d'autoriser la connexion
            // On paasse $bool_validation car cela ne fonctionne pas avec le password_verify
            $bool_validation = password_verify($_POST['pass'], $MdP_hash);
            if ($bool_validation) 
                // On ouvre accès au reste de l'application
                { 
                $_SESSION['connecter'] = 1; // Normalement c'est pas nécessaire de noter qu'il s'est bien loggué mais on ne sait jamais
                header('Location: main.php');
                exit();
                }
            else 
                {
                echo 'Le mot de passe est invalide.';
                    echo "<br>";
                echo $MdP_hash;
                    echo "<br>";
                echo $_POST['pass'];
                    echo "<br>";
                echo password_verify($_POST['pass'], $MdP_hash);
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



            
     