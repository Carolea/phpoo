<?php

abstract class Vehicule
{
    protected $fuel; //protected ou private
    protected $maxSpeed;
    
    protected static $availableFuel = ['essence', 'diesel'];
    
    public function __construct($maxSpeed, $fuel = 'essence')
    {
        $this->setFuel($fuel);
        $this->setMaxSpeed($maxSpeed);
    }
    
    public function getFuel()
    {
        return $this->fuel;
    }
    
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    
    public function setFuel($fuel)
    {
        if(!in_array($fuel, static::$availableFuel))
        {
            $msg = "$fuel n'est pas un carburant accepté: "
                . implode (',', static::$availableFuel)
                . 'sont les valeurs possibles';
            
            trigger_error($msg,E_USER_ERROR);
        }
        
        $this->fuel=$fuel;
        return $this;
    }
            
}

