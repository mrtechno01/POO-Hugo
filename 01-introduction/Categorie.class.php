<?php

class Categorie{

    private $Libelle,
            $CollectionArticles = [];
            
    public function __construct(
        $Libelle){
        $this->Libelle = $Libelle;
    }

    //getters :
    public function getLibelle(){
        return $this->Libelle;
    }
    public function getCollectionArticles(){
        return $this->CollectionArticles;
    }

    // setters:
    public function setLibelle($NouveauLibelle){
        $this->Libelle = $NouveauLibelle;
    }
    public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles[] = $Article;
    }

}

?>