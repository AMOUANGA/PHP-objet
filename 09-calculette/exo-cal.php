<?php 

class Calculette 
{
    private  $nombre1 ;
    private $nombre2 ;
    
    public function  __construct($nb1 , $nb2 ) 
    {
        $this->nombre1 = $nb1;
        $this->nombre2 = $nb2;
    }
    public function  additionner() 
    {
        return $this->nombre1 + $this->nombre2 ;
    }

    public function soustraire() 
    {
         return $this->nombre1 - $this->nombre2 ;
    }


    public function multiplier() 
    {
        return $this->nombre1 * $this->nombre2 ;
    }

    public function diviser() 
    {
        return $this->nombre1 / $this->nombre2 ;
    }

}

$calc = new Calculette(5, 7);
echo $calc->additionner();











?>