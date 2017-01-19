
<!-- Logique PHP de vérification login et mot de passe pour connection de l'utilisateur -->  
<?php
    require("../controle/class/user.class.php");
    if (isset($_POST['pseudo'])) 
    {
        $a = new User();
        $a -> connexion($_POST['pseudo'],$_POST['pass']);
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
        <form id = "connexion" method="post">
            <legend id = "legende">Connexion : </legend>
            <p id = "Connexionchamps">
                <label for="pseudo">Votre pseudo :</label>
                <br>
                <input type="text" style="font-size: 10px" name="pseudo" id="pseudo" />
                <br><br>
                <label for="pass">Votre mot de passe :</label>
                <br>
                <input type="password" style="font-size: 10px" name="pass" id="pass" />
                <br><br>
                <input class="inscr" type="submit" value="Envoyer" />
                <br><br>
                <a href="inscription.php">S'inscrire</a>
                <br>
                <a href="oublie.php">Mot de passe oublié</a>         <!-- # Page à construire -->
            </p>   
        </form>

        <footer>
        <a href="pied">A propos de Alley Hoop</a>
        </footer>

</html>