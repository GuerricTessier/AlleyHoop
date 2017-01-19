<?php
class Equipe
{
    private $pseudo;
    private $email;
    private $signature;
    private $actif;
    
    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    public function setPseudo($nouveauPseudo)
    {
        $this->pseudo = $nouveauPseudo;
    }
}


                //On récupère l'Id de l'enregistrement que l'on vient de créer
                $queryIdUser = $bdd->prepare('SELECT Id FROM users WHERE Pseudo = ?') ; 
                $queryIdUser->execute(array($pseudo));
                $idUser = $queryIdUser->fetch();