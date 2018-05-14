<?php

namespace App\Tests\Calculator;

use App\Calculator\CalculatorFactory;
use App\Calculator\UnknownCalculatorException;
use PHPUnit\Framework\TestCase;

class CalculatorFactoryTest extends TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testFactoryCreate($type, $classname)
    {
        $factory = new CalculatorFactory();
        $calculator = $factory->create($type);
        $this->assertInstanceOf($classname, $calculator);
    }

    public function factoryProvider()
    {
        return [
            ['add', 'App\Calculator\AddCalculator'],
            ['subtract', 'App\Calculator\SubtractCalculator'],
            ['multiply', 'App\Calculator\MultiplyCalculator'],
            ['divide', 'App\Calculator\DivideCalculator'],
            ['and', 'App\Calculator\AndCalculator'],
            ['or', 'App\Calculator\OrCalculator'],
        ];
    }

    public function testFactoryException()
    {
        $this->expectException(UnknownCalculatorException::class);

        $factory = new CalculatorFactory();
        $factory->create("exception");
    }
}
