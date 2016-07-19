<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=alleyhoop;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$a = 'Guerric';
	$b = 'Test';

	echo $a;
	echo $b;

	$req = $bdd->prepare('INSERT INTO users(Pseudo,MotDePasse) VALUES(:pseudo,:pass)');
	$req->execute(array('pseudo' => $a,'pass'=>$b ));

	/*(array(
		'pseudo' => $a,
		'pass' => $b'
		));*/
?>