<?php

class Maison
{
    private static $nbPiece = 7; // Appartiens à la classe. 
    public static $espaceTerain = "500m²"; // appartiens à la classes
    const HAUTEUR = "10m"; // appartiens à la classe.

    public $color = "red"; // appartiens à l'objet.
    private $nbPorte = 10; // appartiens à l'objet.

    public static function getNbPiece()
    {
        return self::$nbPiece;
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}
echo Maison::getNbPiece() . "\n"; // J'appel une methode de ma classe par ma classe.
echo Maison::$espaceTerain . "\n"; // j'appel une propriété de ma classe par ma classe.
echo Maison::HAUTEUR . "\n";

Maison::$espaceTerain = "100m2";

$maison = new Maison;
$maison->getNbPorte();

$maison2 = new Maison;
$maison2->color = "Yellow";


/* 
    Précision : 
        static indique qu'un élément appartient à la classe (dans le cas d'une propriéte, c'est varaible)
        const indique qu'un élément appartient à la classe (dans le cas d'une propriété, c'est constant, non variable)

    Une propriété statique peut tout à fait changer de valeur au cours du temps à la différence d'une constante dont la valeur est fixée.
    Simplement, la valeur d'une propriété statique sera partagée par tous les objets issus de la classe dans laquelle a été définie.

    Opérateur :
        $objet->element d'un objet à l'éxtérieur de la classe.
        $this->element d'un objet à l'interieur de la classe.

        class::element d'une classe à l'exterieur de la calsse.
        self::element d'une classe à l'interieur de la classe.
*/