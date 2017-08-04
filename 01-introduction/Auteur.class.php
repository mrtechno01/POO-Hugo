<?php

class Auteur{

    private $Nom,
            $Prenom,
            $Email;
    
    public function __construct(
        $Nom,
        $Prenom,
        $Email){

        $this->Nom                =$Nom;
        $this->Prenom             =$Prenom;
        $this->Email              =$Email;
    }

    //getters :
    public function getNom(){
        return $this->Nom;
    }
    public function getPrenom(){
        return $this->Prenom;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getNomComplet(){
        return $this->Prenom.' '.$this->Nom;
    }

   // setters:
    public function setNom($NouveauNom){
        $this->Nom = $NouveauNom;
    }
    public function setPrenom($NouveauPrenom){
        $this->Prenom = $NouveauPrenom;
    }
    public function setEmail($NouveauEmail){
        $this->Email = $NouveauEmail;
    }
    
    
    
}


?>