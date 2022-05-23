<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\TwigView;

class StartGameController implements ControllerInterface
{
    private TwigView $twigView;

    public function __construct(TwigView $twigView)
    {
        $this->twigView = $twigView;
    }


    public function render()
    {
        $amountTeam = $_POST['amountTeams'];
        $this->twigView->init();
        $this->twigView->render('StartGameView.twig', ['amountTeams' => $amountTeam]);
        $arrayOfTeams = $this->caseTeamAmount($amountTeam);
    }

    public function caseTeamAmount($amount)
    {

        switch ($amount) {

            case 3:
                $teams = [1, 2, 3];
                break;
            case 4:
                $teams = [1, 2, 3, 4];
                break;
            case 5:
                $teams = [1, 2, 3, 4, 5];
                break;
            case 6:
                $teams = [1, 2, 3, 4, 5, 6];

        }
        return ($teams);

    }


}