<?php
declare(strict_types=1);

namespace App\Controller\ThreeTeams;


use App\Controller\ControllerInterface;
use App\Core\TwigView;

class MatchPlan3PlayersController implements ControllerInterface
{

    public function __construct(private TwigView $twigView)
    {

    }


    public function render()
    {
        $teams = $this->callPlan();

        $this->twigView->init();
        $this->twigView->render('ThreeTeams/MatchPlan3PlayersView.twig', ['teams1' => $teams[0], 'teams2' => $teams[1], 'teams3' => $teams[2]]);
    }

    private function callPlan()
    {
        $teams = [1, 2, 3];
        return $teams;

    }

}