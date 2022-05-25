<?php
declare(strict_types=1);

namespace App\Controller\ThreeTeams;

use App\Controller\ControllerInterface;
use App\Core\TwigView;

class ThreeTeamsFinalController implements ControllerInterface
{


    public function __construct(private TwigView $twigView)
    {


    }

    public function calculate()
    {

        $playsInArray = [$_POST['checkbox1']];
        return $playsInArray;
    }

    public function render()
    {

        $this->twigView->init();
        $value = $this->calculate();
        $this->twigView->render('ThreeTeams/MatchPlan3PlayersFinalView.twig', ['defineValue' => $value[0]]);

    }

}