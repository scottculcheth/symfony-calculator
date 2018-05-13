<?php

namespace App\Controller;

use App\Calculator\BitwiseCalculatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BitwiseController extends AbstractController
{
    protected $calculator;

    public function __construct(BitwiseCalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/and/{x}/{y}")
     */
    public function bitAnd($x, $y)
    {
        $result = $this->calculator->bitAnd($x, $y);
        return $this->json(['result' => $result]);
    }

    /**
     * @Route("/or/{x}/{y}")
     */
    public function bitOr($x, $y)
    {
        $result = $this->calculator->bitOr($x, $y);
        return $this->json(['result' => $result]);
    }
}