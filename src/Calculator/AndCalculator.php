<?php

namespace App\Calculator;

class AndCalculator implements CalculatorInterface
{
    public function calculate($x, $y)
    {
        return (int)$x & (int)$y;
    }
}