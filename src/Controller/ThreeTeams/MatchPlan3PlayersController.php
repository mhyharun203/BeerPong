<?php
declare(strict_types=1);

namespace App\Controller\ThreeTeams;


use App\Controller\ControllerInterface;
use App\Core\PdoConnect;
use App\Core\TwigView;
use App\Model\Mapper\TeamsMapper;
use App\Model\Repository\TeamsRepository;

class MatchPlan3PlayersController implements ControllerInterface
{

    public function __construct(private TwigView $twigView)
    {

    }


    public function render()
    {
        $teams = $this->callPlan();

        $this->twigView->init();
        $this->twigView->render('ThreeTeams/MatchPlan3PlayersView.twig', ['teams1' => $teams[0]['name'], 'teams2' => $teams[1]['name'], 'teams3' => $teams[2]['name']]);
    }

    private function callPlan()
    {
        $teamsRepository = new TeamsRepository(new PdoConnect(), new TeamsMapper());
        $teams =  $teamsRepository->getAllTeams(4);
        return $teams;

    }

}