<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\ThreeTeams\MatchPlan3PlayersController;
use App\Core\TwigView;

class GamePlanController implements ControllerInterface
{

    public function __construct()
    {
    }

    public function render()
    {
        $amountTeams = $_GET['Teams'];
        $this->matchplan($amountTeams);

    }

    public function matchplan($teams)
    {
        switch ($teams) {
            case 3:
                $amountTeams = new MatchPlan3PlayersController(new TwigView());
                $amountTeams->render();
                break;
            case 4;
                $amountTeams = new MatchPlan4PlayersController(new TwigView());
                $amountTeams->render();
        }
        return ($amountTeams);
    }

}