<?php
namespace App\Calculator;

interface BitwiseCalculatorInterface
{
    public function bitAnd(int $x, int $y);
    public function bitOr(int $x, int $y);
}