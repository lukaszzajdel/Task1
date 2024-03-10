<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Circle;
use App\Exceptions\WrongValueException;
use PHPUnit\Framework\TestCase;




class CircleTest extends TestCase

{

    public function test_it_count_circle_surface(): void
    {

        // given that we have Circle object
        $circle = new Circle(2);


        // when we call get surface method
        $surface =  $circle->getSurface();

        //then we assert we get it

        $this->assertEquals(12.56, $surface);
    }


    public function test_it_count_circle_perimeter(): void
    {
        // given that we have Circle object
        $circle = new Circle(3);


        // when we call get surface method
        $perimeter =  $circle->getPerimeter();

        //then we assert we get it

        $this->assertEquals(18.84, $perimeter);
    }

    public function test_it_throw_wrong_value_exception(): void
    {
        $this->expectException(WrongValueException::class);        
        $circle = new Circle(-3);
    }
}
