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
    /**
     * @dataProvider providerSides
     */
    public function test_it_throw_wrong_value_exception(float $sideOne, float $sideTwo): void
    {
        $this->expectException(WrongValueException::class);
        $rectangle = new Rectangle($sideOne, $sideTwo);
    }

    public static function providerSides(): array
    {
        return [
            [-1.2, 1.4],
            [1.3, -1.3],
            [-1.4, -1.2]
        ];
    }
}
