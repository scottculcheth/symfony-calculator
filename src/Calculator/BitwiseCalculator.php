<?php
namespace App\Calculator;

class BitwiseCalculator implements BitwiseCalculatorInterface
{
    public function bitAnd(int $x, int $y)
    {
        return $x & $y;
    }

    public function bitOr(int $x, int $y)
    {
       return $x | $y;
    }
}