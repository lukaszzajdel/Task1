<?php 

declare(strict_types=1);

namespace App;



use App\FigureFLat;
use App\Exceptions\WrongValueException;

class Rectangle extends FigureFLat
{

    public function __construct(private float $sideOne , private float $sideTwo )
    {
        if($sideOne<0 || $sideTwo<0){
                throw new WrongValueException( 'value cannot be less than zero');
           
                
        }
         $this->sideOne = $sideOne;
         $this->sideTwo = $sideTwo;

        
    }

    public function getSurface(): float
    {
        $sideOne = $this->sideOne;
        $sideTwo = $this->sideTwo;

            return $sideOne*$sideTwo;
    }

    public function getPerimeter():float
    {
        $sideOne = $this->sideOne;
        $sideTwo = $this->sideTwo;
        return 2*$sideOne+2*$sideTwo;
    }

}
