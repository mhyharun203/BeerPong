<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\TwigView;

class GamePlanController implements ControllerInterface
{

    public function __construct(private TwigView $twigView)
    {
    }

    public function render()
    {
        $amountTeams = $_GET['Teams'];
        $this->twigView->init();
        $this->twigView->render('GamePlanView.twig', ['Baum' => $amountTeams]);
    }

    public function matchplan($teams)
    {
        $amountTeams = $_GET['Teams'];

    }

}