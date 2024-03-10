<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Square;
use PHPUnit\Framework\TestCase;
use App\Exceptions\WrongValueException;




class SquareTest extends TestCase

{
    /** 
     * @dataProvider providerCorrectSide
     */
    public function test_it_count_square_surface(float $side): void
    {

        // given that we have Circle object
        $square = new Square($side);


        // when we call get surface method
        $surface =  $square->getSurface();

        //then we assert we get surface

        $this->assertEquals(1.44, $surface);
    }

    /** 
     * @dataProvider providerCorrectSide
     */
    public function test_it_count_square_perimeter(float $side): void
    {
        // given that we have Rectangle object
        $square = new Square($side);


        // when we call get surface method
        $perimeter =  $square->getPerimeter();

        //then we assert we get perimeter 
        $this->assertEquals(4.8, $perimeter);
    }

    /** 
     * @dataProvider providerUncorrectSide
     */
    public function test_it_throw_wrong_value_exception(float $side): void
    {
        $this->expectException(WrongValueException::class);
        $square = new Square($side);
    }
    public static function providerUncorrectSide(): array
    {
        return [
            [-1.2]
        ];
    }

    public static function providerCorrectSide(): array
    {
        return [
            [1.2]
        ];
    }
}
