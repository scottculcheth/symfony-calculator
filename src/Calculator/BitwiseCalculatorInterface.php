<?php
namespace App\Calculator;

interface BitwiseCalculatorInterface
{
    public function bitAnd($x, $y);
    public function bitOr($x, $y);
}