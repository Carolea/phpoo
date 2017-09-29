<?php

require_once './Vehicule.php';

class Moto extends Vehicule
{
    protected static $availableFuel= ['essence'];


    public function getNbWheels()
    {
            return 2;
    }
}