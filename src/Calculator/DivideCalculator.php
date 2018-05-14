<?php

namespace App\Calculator;

class DivideCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return $x / $y;
    }
}