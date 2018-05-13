<?php

namespace App\Controller;

use App\Calculator\ArithmeticCalculatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArithmeticAPIController extends AbstractController
{
    protected $calculator;

    public function __construct( ArithmeticCalculatorInterface $calculator )
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/api/add/{x}/{y}")
     */
    public function add($x, $y)
    {
        $result = $this->calculator->add($x, $y);
        return $this->json(['result' => $result]);
    }

    /**
     * @Route("/api/subtract/{x}/{y}")
     */
    public function subtract($x, $y)
    {
        $result = $this->calculator->subtract($x, $y);
        return $this->json(['result' => $result]);
    }

    /**
     * @Route("/api/multiply/{x}/{y}")
     */
    public function multiply($x, $y)
    {
        $result = $this->calculator->multiply($x, $y);
        return $this->json(['result' => $result]);
    }

    /**
     * @Route("/api/divide/{x}/{y}")
     */
    public function divide($x, $y)
    {
        $result = $this->calculator->divide($x, $y);
        return $this->json(['result' => $result]);
    }


}