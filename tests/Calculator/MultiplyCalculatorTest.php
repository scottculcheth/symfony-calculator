<?php

namespace App\Tests\Calculator;

use App\Calculator\MultiplyCalculator;
use PHPUnit\Framework\TestCase;

class MultiplyCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new MultiplyCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 2],
            [8, 2, 16],
            [12, 4, 48],
        ];
    }
}
