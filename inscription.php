<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = 'Pseudo';
$_SESSION['pass'] = 'Mot de passe';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Alley Hoop - Le Site de jeu de basketball</title>   
        <link rel="stylesheet" href="../view/style.css" />      <!-- Indique le Style css utilisé -->     
    </head><link rel="stylesheet" href="../view/style.css" />

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

	 	<p id = messageconfirmationinscription>
	 	<?php
			if(!empty($_POST['pseudo']))
				{try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					    die('Erreur : '.$e->getMessage());
					}

					{
					// On déclare des variables et au passage on crypte le mot de pasee
					$pseudo = htmlspecialchars($_POST['pseudo']);
					$pass = password_hash(htmlspecialchars($_POST['pass']),PASSWORD_DEFAULT);
					echo $pass;



					// On intègre le login et mot de passe en clair en base
					$req = $bdd->prepare('INSERT INTO users(Pseudo,MotDePasse) VALUES(:pseudo,:pass)');
					$req->execute(array('pseudo' => $pseudo,'pass'=>$pass));

					//On récupère l'Id de l'enregistrement que l'on vient de créer
					$queryIdUser = $bdd->prepare('SELECT Id FROM users WHERE Pseudo = ?') ; 
					$queryIdUser->execute(array($pseudo));
		            $idUser = $queryIdUser->fetch();

		            //On crée une équipe dans la table équipe


					echo "Votre inscription a bien été prise en compte";
					echo "<br>";
					echo "Vous aller recevoir un e-mail vous permettant de valider votre compte";
					}

					//mysql_close();	// # si cela se trouve cette partie ne fonctionnera pas
				}
		?>
		</p>

	</section>

</html>