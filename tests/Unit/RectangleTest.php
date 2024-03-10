<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Rectangle;
use PHPUnit\Framework\TestCase;
use App\Exceptions\WrongValueException;




class RectangleTest extends TestCase

{
    /** 
     * @dataProvider providerCorrectSide
     */
    public function test_it_count_rectangle_surface(float $sideOne ,float $sideTwo): void
    {

        // given that we have Circle object
        $rectangle = new Rectangle($sideOne , $sideTwo);


        // when we call get surface method
        $surface =  $rectangle->getSurface();

        //then we assert we get surface

        $this->assertEquals(6.4, $surface);
    }

 /** 
     * @dataProvider providerCorrectSide
     */
    public function test_it_count_rectangel_perimeter(float $sideOne , float $sideTwo): void
    {
        // given that we have Rectangle object
        $rectangle = new Rectangle($sideOne , $sideTwo);


        // when we call get surface method
        $perimeter =  $rectangle->getPerimeter();

        //then we assert we get perimeter 
        $this->assertEquals(10.4, $perimeter);
    }
    /**
     * @dataProvider providerUncorrectSides
     */
    public function test_it_throw_wrong_value_exception(float $sideOne, float $sideTwo): void
    {
        $this->expectException(WrongValueException::class);
        $rectangle = new Rectangle($sideOne, $sideTwo);
    }

    public static function providerUncorrectSides(): array
    {
        return [
            [-1.2, 1.4],
            [1.3, -1.3],
            [-1.4, -1.2]
        ];
    }
    public static function providerCorrectSide(): array
    {
        return [
            [2.0 , 3.2]
        ];
    }
}
