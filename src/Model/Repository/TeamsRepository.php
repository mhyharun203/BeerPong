<?php
declare(strict_types=1);

namespace App\Model\Repository;

use App\Core\PdoConnect;
use App\Model\Mapper\TeamsMapper;

class TeamsRepository
{
    public function __construct(private PdoConnect $pdoConnect, private TeamsMapper $teamsMapper)
    {
    }

    public function getAllTeams($amountTeams)
    {
        $pdoConnection = $this->pdoConnect->connectToDatabase();
        $stmt = $pdoConnection->prepare("SELECT * FROM teams WHERE id <= '$amountTeams'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

