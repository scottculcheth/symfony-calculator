<?php

namespace App\Tests\Calculator;

use App\Calculator\BitwiseCalculator;
use PHPUnit\Framework\TestCase;

class BitwiseCalculatorTest extends TestCase
{
    protected $calculator;

    public function setUp()
    {
        $this->calculator = new BitwiseCalculator();
    }

    public function testAnd()
    {
        $result = $this->calculator->bitAnd(15, 3);
        $this->assertEquals(3, $result);
    }

    public function testAndString()
    {
        $result = $this->calculator->bitAnd("15", "3");
        $this->assertEquals(3, $result);
    }

    public function testOr()
    {
        $result = $this->calculator->bitOr(15, 3);
        $this->assertEquals(15, $result);
    }

    public function testOrString()
    {
        $result = $this->calculator->bitOr("15", "3");
        $this->assertEquals(15, $result);
    }
}