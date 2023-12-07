<?php 

final class Application
{
        public function lancementApplication() 
        {
            return " L'appli ce lance comme cela \n";

        }

}

$app = new Application; // la classe est instanciable
echo $app->lancementApplication();

/* 
 Erreur, on ne peut pas hériter d'une class final !
class extension extends Application {}
*/

 class Application2
{
      final public function lancementApplication() 
        {
            return " L'appli ce lance comme cela \n";

        }

}

class extension2 extends Application2 
{
  // public function lancementApplication(){}
}

/* 
- Une classe final ne peut ètre héritée.
- Une méthode final permet d'éviter qu'elle soit redefinie ou surcharger.
- L'intéret de mèttre le mot-clé "final" sur une méthode dela vérouiller afin d'empecher toute
sous-classe de la redefinir.( quand nous voulons etre 
sur que le comportement d'une methode soit preserver durant l'héritage)
*/






?>