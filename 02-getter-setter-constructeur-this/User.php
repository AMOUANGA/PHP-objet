<?php 

/* 
    1 - Créer une class user.
    2 - Créer deux private propriétés (prenom & nom).
    3 - Créer deux public méthodes (setPrenom & getPrenom).
    4 - Ajouter un argument de réception à setPrenom (prénom).
    5 - Faite un return de votre private propriété (prenom), dans votre méthode (getPrenom).
    6 - Vérifier le type de notre paramètre (si c'est un string)
    puis Modifier la valeur de votre private propriété (prenom) dans la méthode (setPrenom) grâce à l'argument passé en paramètre.
    7 - Puis par exemple si vous affectez "Maria" à votre propriété et que vous appelez votre méthode getPrenom, on doit voir comme résultat "Hello Maria".
*/

class User
{
    private $prenom ;
    private $nom ;
    
    public function setPrenom($arg) 
    {
        if(is_string($arg)) {
            $this->prenom = $arg;
            }
        
    
    }
    
    public function getPrenom() 
    {
        /* 
        $prenom est locale, il ne s'agira pas de la propriété private $prenom.
        return $prenom;
        */
            return $this->prenom;
    
    
    
            }

    }

    $user = new User;
    $user->setPrenom("Maria");

    echo "Hello " . $user->getPrenom() . "\n";

/* 

$this est une référence à l'instance de la classe en cours d'utilisation. 
    C'est un pointeur qui permet d'accéder aux propriétés et méthodes de l'objet à l'intéreur de la  classe.     

    Les getteurs (accéder) et setteurs (affecter) permettent de controller l'intégrité des données. 

    La déclaration des propriétés  (attributs) en tant que privés offre l'avantage d'éviter toute modification direct dans le code, 
    instaurant ainsi une countrainte bénéfique à la sécurité et à l'intégrité des données.  

*/




?>