<?php

declare(strict_types=1);

namespace App;



use App\FigureFLat;
use App\Exceptions\WrongValueException;

class Circle extends FigureFLat
{

    public function __construct(private float $radius)
    {
        if($radius<0){
                throw new WrongValueException( 'value cannot be less than zero');
           
                
        }
         $this->radius = $radius;

        
    }

    public function getSurface(): float
    {
        $radius = $this->radius;

        return $radius*$radius*3.14;
    }

    public function getPerimeter():float
    {
        $radius = $this->radius;
        return 2*3.14*$radius;
    }




}
