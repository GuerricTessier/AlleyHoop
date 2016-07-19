<!-- # Formulaire d'inscription --> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Alley Hoop - Le Site de jeu de basketball</title>     
        <link rel="stylesheet" href="../view/style.css" />      <!-- Indique le Style css utilisé -->     
    </head>

    <header>
    <!-- Ici le contenu de l'en-tête de votre page -->
        <p>Alley Hoop - Le Site de jeu de basketball</p>
    </header>

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

    <footer>
    <!-- Ici le pied de page du site --> 
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

        $requete = $bdd->prepare('SELECT * FROM users WHERE Pseudo = ? and MotDePasse = ?'); 
        $requete-> execute (array(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['pass'])));
        $nbLignes = 0;
        while ($donnees = $requete->fetch())
            {
            $nbLignes = $nbLignes +1;         
            }

        if ($nbLignes > 0)
            {
            $_SESSION['connecter'] = 1;
            }
        }
                ?>

            
     