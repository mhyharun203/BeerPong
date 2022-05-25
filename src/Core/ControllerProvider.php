<?php
declare(strict_types=1);

namespace App\Core;

use App\Controller\GamePlanController;
use App\Controller\HomeController;
use App\Controller\Matchplan4PlayersController;
use App\Controller\StartGameController;
use App\Controller\ThreeTeams\MatchPlan3PlayersController;
use App\Controller\ThreeTeams\ThreeTeamsFinalController;

final class ControllerProvider
{
    public function getList(): array
    {

        return [
            HomeController::class,
            StartGameController::class,
            GamePlanController::class,
            MatchPlan3PlayersController::class,
            MatchPlan4PlayersController::class,
            ThreeTeamsFinalController::class
        ];
    }
}