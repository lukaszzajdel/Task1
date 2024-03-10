<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Square;
use PHPUnit\Framework\TestCase;
use App\Exceptions\WrongValueException;




class SquareTest extends TestCase

{

    public function test_it_count_square_surface(): void
    {

        // given that we have Circle object
        $square = new Square(8);


        // when we call get surface method
        $surface =  $square->getSurface();

        //then we assert we get surface

        $this->assertEquals(64, $surface);
    }


    public function test_it_count_square_perimeter(): void
    {
        // given that we have Rectangle object
        $square = new Square(8);


        // when we call get surface method
        $perimeter =  $square->getPerimeter();

        //then we assert we get perimeter 
        $this->assertEquals(32, $perimeter);
    }

    public function test_it_throw_wrong_value_exception(): void
    {
        $this->expectException(WrongValueException::class);        
        $square = new Square(-1);
        
    }
}
