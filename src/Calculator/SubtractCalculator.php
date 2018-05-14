<?php

namespace App\Calculator;

class SubtractCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return $x - $y;
    }
}