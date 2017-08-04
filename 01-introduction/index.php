<?php
// include des classes
include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';
// Ajout d'auteur
$UnAuteur = new Auteur("Poncet","Gerald","contacts@cbsecurite.com");
// Ajout d'article
$UnArticle = new Article("La Formation WF3","Une Formation Certifiante en 3 mois !","Rejoignez-nous et vous verrez bien !","wf3.jpg", "04/08/2017");
$DeuxArticle = new Article("blablabla","il etait une fois","Tu veux en savoir plus et bien non !","bla.jpg", "04/08/2017");
$TroisArticle = new Article("hjhgjgjy","ghjgk","Tftjfjtfjht ftfdt hjfthj fhtjf thfh !","lo.jpg", "03/08/2017");
$QuatreArticle = new Article("pioiioiouiu","wazaaqw  wa  wa aq waz wz","Tmmguummèu mgmmu !","pppppp.jpg", "02/08/2017");
// Ajout d'auteur a l'article
$UnArticle->setAuteur($UnAuteur);
$DeuxArticle->setAuteur($UnAuteur);
$TroisArticle->setAuteur($UnAuteur);
$QuatreArticle->setAuteur($UnAuteur);
// Ajout de catégorie
$UneCategorie = new Categorie("Informatique");
$DeuxCategorie = new Categorie('Formation informatique');
// Tableau Unarticle
echo'<h1><strong>Tableau UnArticle</strong></h1><pre>';
print_r($UnArticle);
echo'</pre>';
// Titre UnArticle
echo '<p><strong>UnArticle Titre :</strong> '.$UnArticle->getTitre().'</p>';
// Modification Titre UnArticle
$UnArticle->setTitre('La Formation WebForce3 (nouveau titre)');
// Titre modifié UnArticle
echo '<p><strong>Nouveau UnArticle Titre :</strong> '.$UnArticle->getTitre().'</p>';
// Nouveau tableau UnArticle
echo'<h1><strong>Tableau UnArticle modifier</strong></h1><pre>';
print_r($UnArticle);
echo'</pre>';

// tableau auteur 1
echo'<h1><strong>Tableau UnAuteur</strong></h1><pre>';
print_r($UnAuteur);
echo'</pre>';
// manipulation tableau auteur 1
echo '<p><strong>UnAuteur Nom :</strong> '.$UnAuteur->getNom().'</p>';
$UnAuteur->setNom('PONCET (nouveau nom)');
echo '<p><strong>Nouveau UnAuteur Nom :</strong> '.$UnAuteur->getNom().'</p>';
// Nouveau tableau auteur 1
echo'<h1><strong>Tableau UnAuteur modifier</strong></h1><pre>';
print_r($UnAuteur);
echo'</pre>';

// tableau categorie 1
echo'<h1><strong>Tableau UneCategorie</strong></h1><pre>';
print_r($UneCategorie);
echo'</pre>';
// manipulation tableau categorie 1
echo '<p><strong>UneCategorie Libellé :</strong> '.$UneCategorie->getLibelle().'</p>';
$UneCategorie->setLibelle('Multimédia (nouveau libellé)');
echo '<p><strong>Nouvelle UneCategorie Libellé :</strong> '.$UneCategorie->getLibelle().'</p>';
// Nouveau tableau auteur 1
echo'<h1><strong>Tableau UneCategorie modifier</strong></h1><pre>';
print_r($UneCategorie);
echo'</pre>';
// liste des article pour categorie
$DeuxCategorie->AjouterUnArticle($TroisArticle);
$DeuxCategorie->AjouterUnArticle($QuatreArticle);

$UneCategorie->AJouterUnArticle($UnArticle);
$UneCategorie->AJouterUnArticle($DeuxArticle);


echo'<h1><strong>Tableau collection Articles</strong></h1><pre>';
print_r($DeuxCategorie);
echo'</pre>';
// liste a puce
echo'<h1>Liste a puce des categorie + article</h1>';
echo'<ol>';
echo'<li>'.$UneCategorie->getLibelle().'</li>';
echo'<ul>';
$articles1 = $UneCategorie->getCollectionArticles();
foreach($articles1 as $article){
    echo'<li>'.$article->getTitre().' - '.$article->getAuteur()->getNomComplet().'</li>';
}
echo'</ul>';echo'<li>'.$DeuxCategorie->getLibelle().'</li>';
echo'<ul>';
$articles2 = $DeuxCategorie->getCollectionArticles();
foreach($articles2 as $article){
    echo'<li>'.$article->getTitre().'</li>';
}
echo'</ul>';
echo'</ol>';


echo'<h1><strong>Ajout 1 Auteur pour 1 article</strong></h1><pre>';

