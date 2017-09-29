<?php

require_once './Animal.php';

class Maitre

{
    private $animal;
    
    public function getAnimal()
    {
        return $this->animal;
    }
    
    /*
    
        * Le paramètre $animal doit être une intance de la classe animal
        * (donc une de ses classes filles) 
     
    */
    
    public function setAnimal(Animal $animal)
    {    
            $this->animal = $animal;
            return $this;
    }
    
    public function caresserAnimal()
    {        
            if(!empty($this->animal))
            {
                $this->animal->crier();
                    /*
                     * $animal = $this-> // instance de la classe Animal
                     * $animal = crier()
                    */
            }
        
    }        
}

