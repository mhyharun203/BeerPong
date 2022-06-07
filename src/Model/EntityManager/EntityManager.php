<?php
declare(strict_types=1);


namespace App\Model\EntityManager;

use App\Core\PdoConnect;






class EntityManager
{

    private PdoConnect $pdoConnect;

    public function __construct(PdoConnect $pdoConnect)
    {
        $this->pdoConnect = $pdoConnect;
    }
}


