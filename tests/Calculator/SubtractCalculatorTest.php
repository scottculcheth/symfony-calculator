<?php

namespace App\Tests\Calculator;

use App\Calculator\SubtractCalculator;
use PHPUnit\Framework\TestCase;

class SubtractCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new SubtractCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 1],
            [8, 2, 6],
            [12, 4, 8],
        ];
    }
}
