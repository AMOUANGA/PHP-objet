<?php
/*   1 - Créez une classe qui doit contenir trois propriétés privées (nom, prenom, age).
2 - Chaque propriété doit avoir son getter et setter 
3 - Vérifier si la donnée est bien une chaîne de caractères dans le setter, Si c'est le cas, affectez la valeur sinon, renvoyez un booléen FALSE.
*/


class Identite
    {
        private $nom;
        private $prenom;
        private $age;

        public function __construct($nom,$prenom,$age)
        {
            $this->setnom($nom);
            $this->setprenom($prenom);
            $this->setage($age);
        }
        public function getnom()
        {
            return $this->nom;
        }

        public function setnom($nom)
        {
            if (is_string($nom))
        {
        $this->nom = $nom; 
        }
        else
        {
            return "False";
        }

        }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        if (is_string($prenom))
        {
        $this->nom = $prenom; 
        }
        else
        {
            return "False";
        } 
    }

    public function getage()
    {
        return $this->age;
    }

    public function setage($age)
    {

        if (is_numeric($age) && $age >=0)
        {
        $this->nom = $age; 
        }
        else
        {
            return "False";
        }  
    }

}

    $ind = new Identite("mouanga","aaron",30);




echo "nom : " . $ind->getnom() . "\n";
echo "prenom : " . $ind->getprenom() . "\n";
echo "age : " . $ind->getage() . "\n";
?>