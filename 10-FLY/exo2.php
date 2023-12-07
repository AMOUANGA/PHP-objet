<?php

/* Création de la classe :

Créez une classe Livraison avec les propriétés privées suivantes : adresse, dateLivraison, et statut.
Constructeur ->

Ajoutez un constructeur à la classe Livraison qui prend en paramètre l'adresse et la dateLivraison. 
Le statut doit être optionnel et par défaut égal à "En attente".

Méthodes Getter et Setter ->

Ajoutez des méthodes getter et setter pour chaque propriété de la classe. 
Vérifiez le type de données dans les setters (par exemple, l'adresse doit être une chaîne de caractères).

Méthode livrer ->

*/

           class livraison 

{
   private $adresse ;
   private $dateLivraison ;
   private $statut ;

public function __construct($adresse,$dateLivraison,)
{
    $this->SetAdresse($adresse);
    $this->SetDatelivraison($dateLivraison);
}

public function GetAdresse()
{
     return $this->adresse;
}


public function SetAdresse($adresse)
{

    if (is_string($adresse))
    {
    $this->adresse = $adresse; 
    }
    else
    {
        return "False";
    }

}


public function GetDatelivraison()
{
    return $this->dateLivraison;
}


public function SetDatelivraison($dateLivraison)
{

    if (is_string($dateLivraison))
    {
    $this->dateLivraison = $dateLivraison; 
    }
    else
    {
        return "False";
    }
}


public function GetStatut()
{
    return $this->statut;
}


public function SetStatut($statut)
{

    if (is_string($statut))
    {
    $this->statut = $statut; 
    }
    else
    {
        return "False";
    }

}

public function livré()

{



}





}

$Livr = new livraison();











?>