<?php

namespace App\Calculator;

class CalculatorFactory
{
    protected $calculators = [
        'add' => 'App\Calculator\AddCalculator',
        'subtract' => 'App\Calculator\SubtractCalculator',
        'multiply' => 'App\Calculator\MultiplyCalculator',
        'divide' => 'App\Calculator\DivideCalculator',
        'and' => 'App\Calculator\AndCalculator',
        'or' => 'App\Calculator\OrCalculator',
    ];

    public function create( string $type ):CalculatorInterface
    {
        if( !array_key_exists($type, $this->calculators) ){
            throw new UnknownCalculatorException();
        }

        $calculator_class = $this->calculators[$type];
        return new $calculator_class;
    }
}