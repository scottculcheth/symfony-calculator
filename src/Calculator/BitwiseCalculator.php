<?php
namespace App\Calculator;

class BitwiseCalculator implements BitwiseCalculatorInterface
{
    public function bitAnd($x, $y)
    {
        return $x & $y;
    }

    public function bitOr($x, $y)
    {
       return $x | $y;
    }
}