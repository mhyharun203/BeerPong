<?php
declare(strict_types=1);

namespace App\Core;


use PDO;
use PDOException;


class PdoConnect
{
    private ?PDO $PDO;

    public function connectToDatabase(): PDO
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "nexus123";

        try {
            $this->PDO = new PDO("mysql:host=$servername; port=3336; dbname=main", $username, $password);
            // set the PDO error mode to exception
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->PDO;
        } catch (PDOException $e) {
             throw new \RuntimeException("Connection failed: " . $e->getMessage()) ;
        }
    }
    public function closeConnection(): void {
        $this->PDO = null;
    }
}