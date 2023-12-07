<?php

class Animal
{
        protected function deplacement() 
        {
            return "je me déplace \n";
        }
        
        public function mange()
    {
        return "je mange chaque jour";
    }
}

class Elephant extends Animal {

    public function quiSuisJe()
    {
        return "Je suis un Elephant et " . $this->deplacement();
    }
}

class chat {

    public function quiSuisJe()
    {
        return "Je suis un chat";
    }

    public function mange()
    {
        return "Je mange comme un chat";
    }
}


// 1 - afficher "je mange chaque jour"
// 2 - afficher "Je suis un Elephant et je me deplace"

$eleph = new Elephant;
$eleph->mange();
echo  $eleph->mange() . "\n";
echo $eleph->quiSuisJe();
// Use classe Chat
// 1 - afficher "je mange comme un chat
// 2 - afficher "Je suis un chat"
$chat = new Chat;
echo $chat->mange() . "\n";
echo $chat->quiSuisJe();














?>