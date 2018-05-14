<?php

namespace App\Calculator;

class AddCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return $x + $y;
    }
}