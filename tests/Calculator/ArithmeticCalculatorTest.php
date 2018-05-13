<?php

namespace App\Tests\Calculator;

use App\Calculator\ArithmeticCalculator;
use PHPUnit\Framework\TestCase;

class ArithmeticCalculatorTest extends TestCase
{
    protected $calculator;

    public function setUp()
    {
        // Get Calculator
        $this->calculator = new ArithmeticCalculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(12, 4);
        $this->assertEquals(16, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(12, 4);
        $this->assertEquals(8, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(12, 4);
        $this->assertEquals(48, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(12, 4);
        $this->assertEquals(3, $result);
    }
}