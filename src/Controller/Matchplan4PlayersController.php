<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\TwigView;

class Matchplan4PlayersController
{

    public function __construct(private TwigView $twigView)
    {

    }

    public function render()
    {
        $this->twigView->init();
    }

    public function matchplan()
    {
        $teams = [1, 2, 3];
        //var_dump($teams);
    }


}