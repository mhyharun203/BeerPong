<?php
declare(strict_types=1);
namespace App\Model\DTO;

class  MatchDataTransferObject {
    public int $wins = 0;
    public int $loses = 0;
    public string $name = '';
    public int $position = 0;


    public function getWins()
    {
        return $this->wins;
    }


    public function setWins($wins): void
    {
        $this->wins = $wins;
    }


    public function getLoses()
    {
        return $this->loses;
    }


    public function setLoses($loses): void
    {
        $this->loses = $loses;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }



    public function getPosition()
    {
        return $this->position;
    }


    public function setPosition($position): void
    {
        $this->position = $position;
    }

}
