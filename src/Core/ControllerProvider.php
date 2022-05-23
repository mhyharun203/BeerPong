<?php
declare(strict_types=1);

namespace App\Core;

use App\Controller\GamePlanController;
use App\Controller\HomeController;
use App\Controller\StartGameController;


final class ControllerProvider
{
    public function getList(): array
    {

        return [
            HomeController::class,
            StartGameController::class,
            GamePlanController::class
        ];
    }
}