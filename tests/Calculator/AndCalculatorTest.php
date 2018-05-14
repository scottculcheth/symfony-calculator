<?php

namespace App\Tests\Calculator;

use App\Calculator\AndCalculator;
use PHPUnit\Framework\TestCase;

class AndCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new AndCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 0],
            [8, 2, 0],
            [12, 4, 4],
        ];
    }
}
