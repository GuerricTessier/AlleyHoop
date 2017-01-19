<!-- Logique PHP de création du user via sa classe --> 
<?php
	require("../controle/class/user.class.php");
	if (isset($_POST['pseudo'])) 
	{
 		$a = new User();
 		$a -> inscription($_POST['pseudo'],$_POST['pass']);
 	}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Alley Hoop - Le Site de jeu de basketball</title>   
        <link rel="stylesheet" href="../view/style.css" />      <!-- Indique le Style css utilisé -->     
    </head><link rel="stylesheet" href="../view/style.css" />

    <header>
    <p>Alley Hoop - Le Site de jeu de basketball</p>
    </header>


    <!-- Affiche le formulaire d'inscription -->  
	</section>
		<p id = "t_premiere_inscription">Pas encore inscrit ? <br>
		Vous aller voir c'est <strong> très simple !</strong> 
		</p>

		<form id = "premiere_inscription" method="post">
	        <p>
	            <label for="pseudo">Choisissez votre pseudo :</label>
	            <input type="text" name="pseudo" id="pseudo" value = "Votre pseudo"/>
	        </p> 
	        <p>
	            <label for="pass">Choisissez votre mot de passe :</label>
	            <input type="password" name="pass" id="pass" value = "Motpasse" />
	        </p>
	        <p>
	            <label for="nomEquipe">Choisissez le nom de votre équipe :</label>
	            <input type="text" name="nomEquipe" id="nomEquipe" value = "Nom de votre équipe"/>
	        </p> 
	        <p>
	            <label for="villeEquipe">Choisissez la ville de votre équipe :</label>
	            <input type="text" name="villeEquipe" id="villeEquipe" value = "Ville de votre équipe" />
	        </p>	        
	        <p>
	            <input class="premiere_inscription_c" type="submit" value="Envoyer" />
	        </p> 			
	    </form>

		<footer>
        	<a href="pied">A propos de Alley Hoop</a>
        </footer>

	</section>

</html>