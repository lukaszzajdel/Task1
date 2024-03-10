<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Rectangle;
use PHPUnit\Framework\TestCase;
use App\Exceptions\WrongValueException;




class RectangleTest extends TestCase

{

    public function test_it_count_rectangle_surface(): void
    {

        // given that we have Circle object
        $rectangle = new Rectangle(2, 3);


        // when we call get surface method
        $surface =  $rectangle->getSurface();

        //then we assert we get surface

        $this->assertEquals(6, $surface);
    }


    public function test_it_count_rectangel_perimeter(): void
    {
        // given that we have Rectangle object
        $rectangle = new Rectangle(2, 3);


        // when we call get surface method
        $perimeter =  $rectangle->getPerimeter();

        //then we assert we get perimeter 
        $this->assertEquals(10, $perimeter);
    }

    public function test_it_throw_wrong_value_exception(): void
    {
        $this->expectException(WrongValueException::class);        
        $rectangle = new Rectangle(3,-1);
        
    }
}
