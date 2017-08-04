<?php

class Article{

    private $Titre,
            $Accroche,
            $Description,
            $FeaturedImage,
            $DateCreationArticle,
            $Auteur;

    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle){

        $this->Titre                =$Titre;
        $this->Accroche             =$Accroche;
        $this->Description          =$Description;
        $this->FeaturedImage        =$FeaturedImage;
        $this->DateCreationArticle  =$DateCreationArticle;
    }

    //getters :
    public function getTitre(){
        return $this->Titre;
    }
    public function getAccroche(){
        return $this->Accroche;
    }
    public function getDescription(){
        return $this->Description;
    }
    public function getFeaturedImage(){
        return $this->FeaturedImage;
    }
    public function getDateCreationArticle(){
        return $this->DateCreationArticle;
    }
    public function getAuteur(){
        return $this->Auteur;
    }

   // setters:
    
    public function setTitre($NouveauTitre){
        $this->Titre = $NouveauTitre;
    }
    public function setAccroche($NouveauAccroche){
        $this->Accroche = $NouveauAccroche;
    }
    public function setDescription($NouveauDescription){
        $this->Description = $NouveauDescription;
    }
    public function setFeaturedImage($NouveauFeaturedImage){
        $this->FeaturedImage = $NouveauFeaturedImage;
    }
    public function setDateCreationArticle($NouveauDateCreationArticle){
        $this->DateCreationArticle = $NouveauDateCreationArticle;
    }
    public function setAuteur(Auteur $Auteur){
        $this->Auteur = $Auteur;
    }
    
    
    
    
}


?>