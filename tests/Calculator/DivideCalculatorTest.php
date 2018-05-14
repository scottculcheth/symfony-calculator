<?php

namespace App\Tests\Calculator;

use App\Calculator\DivideCalculator;
use PHPUnit\Framework\TestCase;

class DivideCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new DivideCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 2],
            [8, 2, 4],
            [12, 4, 3],
        ];
    }
}
