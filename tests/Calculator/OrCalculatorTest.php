<?php

namespace App\Tests\Calculator;

use App\Calculator\OrCalculator;
use PHPUnit\Framework\TestCase;

class OrCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new OrCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 3],
            [8, 2, 10],
            [12, 4, 12],
        ];
    }
}
