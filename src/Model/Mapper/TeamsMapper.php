<?php
declare(strict_types=1);

namespace App\Model\Mapper;

use App\Model\DTO\MatchDataTransferObject;

class TeamsMapper
{
    public function mapToDto(array $teams): MatchDataTransferObject
    {
        $teamsDto = new MatchDataTransferObject();

        $teamsDto->setName($teams['teamName']);
        $teamsDto->setLoses($teams['loses']);
        $teamsDto->setWins($teams['wins']);
        $teamsDto->setPosition($teams['position']);
        return $teamsDto;
    }

}
