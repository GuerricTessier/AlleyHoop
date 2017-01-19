<?php
class User
{
    private $pseudo;
    private $pass;
    
    public function inscription($pseudo,$pass)
    {
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


                // On intègre le login et mot de passe crypté en base
                $req = $bdd->prepare('INSERT INTO users(Pseudo,MotDePasse) VALUES(:pseudo,:pass)');
                $req->execute(array('pseudo' => $pseudo,'pass'=>$pass));

                //On récupère l'Id de l'enregistrement que l'on vient de créer
                $queryIdUser = $bdd->prepare('SELECT Id FROM users WHERE Pseudo = ?') ; 
                $queryIdUser->execute(array($pseudo));
                $idUser = $queryIdUser->fetch();

                if($idUser > 0)
                    {
                        echo "Votre inscription a bien été prise en compte";
                        //echo "<br>";
                        //echo "Vous aller recevoir un e-mail vous permettant de valider votre compte";
                    }
                else
                    {
                        echo "Oups, il y a eu un souci. Sorry.";
                        echo "<br>";
                        echo "Essayer à nouveau";
                    }

                //mysql_close();
                }
            }
    }
    
    public function connexion($pseudo,$pass)
        {   
            if (isset($_POST['pseudo']))  
                {
                try // Tentative d'accéder à la base de données
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
            while ($TabUsers = $requete->fetch())
                {
                // On renseigne les variables des sessions liées à l'utilisateurs
                    $_SESSION['IdUser'] = $TabUsers[0];
                    $_SESSION['pseudo'] =  $TabUsers[1];
                    $MdP_hash = $TabUsers[2];
                }

            if (empty($MdP_hash))
                {$MdP_hash =0;}

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
                } 
            //mysql_close();
            }
        }

}