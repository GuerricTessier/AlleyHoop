<?php
	{try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		    die('Erreur : '.$e->getMessage());
		}
	}

	for ($nbJoueur = 1; $nbJoueur <= 100; $nbJoueur++)
		{ 
		// Définition des caractéristiques d'un joueur
		$idPrenom = rand(1,10);
		$idNom = rand(1,10);
		$idNationalite = rand(1,5);
		$taille = rand(175,210);
		$forme = rand(1,100);
		$experience = rand(1,100);
		$temperament = rand(1,5);
		$vitesse = rand(1,100);
		$dribble = rand(1,100);
		$passe = rand(1,100);
		$shoot = rand(1,100);
		$dunk = rand(1,100);
		$defense = rand(1,100);


		// On va chercher un prénom
		$queryPrenom = $bdd->prepare('SELECT Prenom FROM joueursprenom WHERE Id = ?') ; 
		$queryPrenom->execute(array($idPrenom));
		$prenom = $queryPrenom->fetch();

		// On va chercher un nom
		$queryNom = $bdd->prepare('SELECT Nom FROM joueursnom WHERE Id = ?') ; 
		$queryNom->execute(array($idNom));
		$nom = $queryNom->fetch();

		// On va chercher une nationalité
		$queryNationalite = $bdd->prepare('SELECT Nationalite FROM joueursnationalite WHERE Id = ?') ; 
		$queryNationalite->execute(array($idNationalite));
		$nationalite = $queryNationalite->fetch();

		// Insertion du joueur en base de données
		$queryCreationJoueur = $bdd->prepare('INSERT INTO joueurs(Nomjoueur,NationaliteJoueur,Taille,Forme,Experience,Temperament,Vitesse,Dribble,Passe,Shoot,Dunk,Defense) VALUES(:Nomjoueur,:NationaliteJoueur,:Taille,:Forme,:Experience,:Temperament,:Vitesse,:Dribble,:Passe,:Shoot,:Dunk,:Defense)');
		$queryCreationJoueur->execute(array(
			'Nomjoueur' => $prenom[0].' '.$nom[0],
			'NationaliteJoueur' => $nationalite[0],
			'Taille' => $taille,
			'Forme' => $forme,
			'Experience' => $experience,
			'Temperament' => $temperament,
			'Vitesse' => $vitesse,
			'Dribble' => $dribble,
			'Passe' => $passe,
			'Shoot' => $shoot,
			'Dunk' => $dunk,
			'Defense' => $defense));
		}
		// Retourne erreur intégration de données dans la BDD
		//print_r($queryCreationJoueur->errorInfo());

	if($bdd)
		{$bdd = NULL;}
?>