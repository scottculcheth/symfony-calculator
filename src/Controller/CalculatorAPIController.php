<?php

namespace App\Controller;

use App\Calculator\CalculatorFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorAPIController extends AbstractController
{
    protected $factory;

    public function __construct(CalculatorFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @Route("/api/v2/{type}/{x}/{y}")
     */
    public function add($type, $x, $y)
    {
        $calculator = $this->factory->create($type);
        return $this->json(['result' => $calculator->calculate($x, $y)]);
    }
}