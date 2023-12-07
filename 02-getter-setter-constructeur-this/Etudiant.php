<?php

class Etudiant {

    private $prenom;

    /* 
    __construct : méthode appelée automatiquement lors de l'instanciation.
    On ne peut pas déclarer deux constructeurs en PHP;
    */

    public function __construct($arg) 
    {
       echo "Instanciation..., nous avons reçu l'information suivante : $arg \n";
       $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
        {
            if(is_string($arg)) {
                $this->prenom = $arg;
                }
            
        
        }
        
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant = new Etudiant("Fabrice");


/* 
__constructeur est appelée automatiquement,
nous mettons un argument après le nom de la classe 
qui atterit directement dans le constructeur __

*/

echo $etudiant->getPrenom();






?>