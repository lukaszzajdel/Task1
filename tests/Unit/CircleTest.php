<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Circle;
use App\Exceptions\WrongValueException;
use PHPUnit\Framework\TestCase;




class CircleTest extends TestCase

{
/** 
     * @dataProvider providerCorrectRadius
     */
    public function test_it_count_circle_surface(float $radius): void
    {

        // given that we have Circle object
        $circle = new Circle($radius);


        // when we call get surface method
        $surface =  $circle->getSurface();

        //then we assert we get it

        $this->assertEquals(7.065, $surface);
    }

/** 
     * @dataProvider providerCorrectRadius
     */
    public function test_it_count_circle_perimeter(float $radius): void
    {
        // given that we have Circle object
        $circle = new Circle($radius);


        // when we call get surface method
        $perimeter =  $circle->getPerimeter();

        //then we assert we get it

        $this->assertEquals(9.42, $perimeter);
    }

    /**
     * @dataProvider providerUncorrectRadius
     */
    public function test_it_throw_wrong_value_exception(float $radius): void
    {

        $this->expectException(WrongValueException::class);
        $circle = new Circle($radius);
    }

    public static function providerCorrectRadius(): array
    {
        return [
            [1.5]
        ];
    }
    public static function providerUncorrectRadius(): array
    {
        return [
            [-1.5]
        ];
    }
}
