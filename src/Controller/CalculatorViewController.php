<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorViewController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function calculatorMain()
    {
        return $this->render("calculator/index.html.twig");
    }
}