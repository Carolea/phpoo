<?php

require_once './Animal.php';

class Chat extends Animal
{
    //surcharge de l'attribut $espece dans Chat
    protected $espece = 'chat';
    
    public function identifier()
    {
        return parent::identifier() . ', je suis un  ';
    }
    
    public function crier()
    {
        echo 'Nya';
    }
    
    final public function ronronner()
    {
        echo 'Ronron';
    }

}
