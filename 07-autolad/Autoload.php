<?php

function inclusionAutomatique($nomDelaclasse)
{
require_once($nomDelaclasse . '.class.php');
echo "On passe dans inclusionAutomatique ! \n";
echo "require($nomDelaclasse.class.php) \n";
}

spl_autoload_register('inclusionAutomatique');

/* 
spl_autoload_register : Permet d'éxécuter une fonction lorsque  l'interupteur voir
passer le mot 'new' dans le code.
Le nom suivi de 'new' est récupéré et autmatiquement transmis à la fonction
inclusionAutomatique.
*/





?>



