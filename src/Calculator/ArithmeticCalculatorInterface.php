<?php

namespace App\Calculator;

interface ArithmeticCalculatorInterface
{
    public function add($x, $y);
    public function subtract($x, $y);
    public function multiply($x, $y);
    public function divide($x, $y);
}