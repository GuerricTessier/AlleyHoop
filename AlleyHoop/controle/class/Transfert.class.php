<?php
class Transfert
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