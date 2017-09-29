<?php

namespace Animal;

class Ant
{
    public function watchAfricanElephant() 
    {
        $elephant = new Continent\Africa\Elephant();
        echo $elephant->getEarsSize();
    }
}

