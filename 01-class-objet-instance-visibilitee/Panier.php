<?php 

class Panier 
{
    public $nbProduits; // Propriété
    private $nbProduits2;

    public function ajouterArticle($arg) // <-- METHODE
    { // --- Traitement
    return "l'article a été ajouté $arg \n";
    }

protected function retirerArticle($arg) // <-- METHODE
{
    return "L'article à été retiré $arg \n";
}

private function afficheArticle() // <-- METHODE 
{ // --- Traitement
    return " voici les article\n";
}

}
/*
"new" est un mot clé permettant d'effectuer une instanciation (objet)
Une classe peut produire plusieurs objet.
Nous pouvons donc efffectuer plusieur instanciation 'new'.
*/
$panier = new panier; 

$panier->nbProduits = 5;


echo "Panier $panier->nbProduits produits \n"; // Propriété public, cela fonctionne.

echo $panier->ajouterArticle("jean") . "\n"; // Méthode public, cela fonctionne

/* 
    Méthode protected, cela fonctionne pas (erreur, l'élément est accessible uniquement dans la class Panier.)
    echo $panier->retirerArticle("Jean") . "\n";
*/

/* 
    Méthode private, cela fonctionne pas (erreur, l'élément est accessible uniquement dans la class Panier.) 
    echo $panier->afficheArticle() . "\n";
*/ 

echo"*** ------------ *** \n";

$panier2 = new Panier;
$panier2->nbProduits = 10;

$panier3 = new Panier ;
$panier3->nbProduits = 42;

echo "Panier2 $panier2->nbProduits produits \n";
echo "Panier3 $panier3->nbProduits produits \n";

/* 
Niveau de visibilité :
    public : accessible de partout.
    protected : accessible dans la classse ou elle a été déclaré et aussi les classes héritières.
    private : accessible uniquement dans la classe ou elle a été déclaré.
*/






?>