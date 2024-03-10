<?php

declare(strict_types=1);



namespace App;


use App\FigureFLat;
use App\Exceptions\WrongValueException;

class Square extends FigureFLat
{

    public function __construct(private float $side)
    {
        if($side<0){
                throw new WrongValueException( 'value cannot be less than zero');
           
                
        }
         $this->side = $side;

        
    }

    public function getSurface(): float
    {
        $side = $this->side;

            return $side*$side;
    }

    public function getPerimeter():float
    {
        $side = $this->side;
        return 4*$side;
    }




}
