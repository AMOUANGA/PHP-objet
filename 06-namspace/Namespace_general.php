<?php 

namespace General;

require_once("Namespace_commerce.php");
// Importer les namespace Commerce1, Commerce2, et Commerce3 du fichier inclus.
USE Commerce1, Commerce2, Commerce3;
// affiche le nom du fichier actuel
echo __NAMESPACE__ ."\n";

// crée un nouvel objet en instenciant la classe 'command' du namespace 'commerce1' .
$command = new Commerce1\Command;

$produit = new Commerce2\Produits;

$produit2 = new Commerce3\Produits;

$command2 = new Commerce3\Command;

echo $command->nbCommande . "\n";

echo $command2->nbCommande . "\n";

echo $produit->nbProduit . "\n";

echo $produit2->nbProduit . "\n";



?>