<?php
declare(strict_types=1);

use App\Core\TwigView;
use Twig\Environment;

require __DIR__ . '/../vendor/autoload.php';

$pdoConnection = new \App\Core\PdoConnect();
$connection = $pdoConnection->connectToDatabase();
$search = $_GET['page'] ?? 'HomeController';
$controllerProvider = new App\Core\ControllerProvider;


foreach ($controllerProvider->getList() as $class) {
    if ('App\Controller\\' . $search === $class || 'App\Controller\ThreeTeams\\' . $search === $class) {
        $view = new TwigView();
        $page = new $class($view);
        $page->render();

    }
}
$pdoConnection->closeConnection();
