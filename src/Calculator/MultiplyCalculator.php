<?php

namespace App\Calculator;

class MultiplyCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return $x * $y;
    }
}