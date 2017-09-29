<?php

require_once './Vehicule.php';

class Auto extends Vehicule
{
    protected static $availableFuel= ['essence'];
    
    public function getNbWheels()
    {
        return 4;
    }
}