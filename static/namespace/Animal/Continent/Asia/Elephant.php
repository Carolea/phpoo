<?php

namespace Animal\Continent\Asia;

use Animal\Elephant as AbstractElephant;

class Elephant extends AbstractElephant
{
    public function getEarSize() 
    {
        return 'small';
    }
    
    public function beSeen() 
    {
       $tourist = new \Tourist();
       $tourist->watchElephant('asia');
    }
}
