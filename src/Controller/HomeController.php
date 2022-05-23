<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\TwigView;
use App\Controller\ControllerInterface;

class HomeController implements ControllerInterface
{

    private TwigView  $twigView;

   public function __construct(TwigView $twigView)
   {
       $this->twigView = $twigView;
   }


    public function render()
    {

        $this->twigView->init();
        $this->twigView->render('HomeView.twig', ['Welcome' => 'Wilkommen zum BeerPong Game']);
    }
}



