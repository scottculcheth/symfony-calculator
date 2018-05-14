<?php

namespace App\Calculator;

class OrCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return (int)$x | (int)$y;
    }
}