

<?php 

class A
{
    public function calcul()
    {
        return 10;
    }
    }

    class B extends A 
    {
    public function calcul() // Redefinition de ma méthode calcul.
    {
        /* 
        Surcharge (Override).
        Je n'utilise pas $this->calcul() sinon elle sera récursive et la méthode s'appellera en boucle.

        "parent::" fonctionne pour appeler une méthode d'une classe parent LORS d'une surcharge (afin d'éviter qu'elle ne s'appelle pas elle-même) car elle est redéfinie... 
        */
        $nb = parent::calcul();

        // SANS {}
        if($nb <= 100) return "$nb est inferieur ou egal a 100 \n";
        else return "$nb est superieur a 100 \n";
        
        // AVEC {}
        if($nb <= 100) {
        return "$nb est inferieur ou egal a 100 \n";
        }
        else {
        return "$nb est superieur a 100 \n";
        }
    }

    public function autreCalcul()
    {
        parent::calcul();
        /* 
        Il est possible d'atteindre une méthode de ma classe parent, même s'il n y a pas de rédefinition (surcharge).
        */ 
    } 
}

$objet = new B;
echo $objet->calcul();  
