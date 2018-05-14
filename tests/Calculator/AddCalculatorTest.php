<?php

namespace App\Tests\Calculator;

use App\Calculator\AddCalculator;
use PHPUnit\Framework\TestCase;

class AddCalculatorTest extends TestCase
{
    /**
     * @dataProvider calculateProvider
     */
    public function testCalculate($x, $y, $expected)
    {
        $calculator = new AddCalculator();
        $this->assertEquals($expected, $calculator->calculate($x, $y));
    }

    public function calculateProvider()
    {
        return [
            [2, 1, 3],
            [8, 2, 10],
            [12, 4, 16],
        ];
    }
}
