<?php

declare(strict_types=1);
namespace App\Model;

use PDO;
use PDOException;

abstract class AbstractModel
{
    public PDO $conn;

    private function getConfiguration(): array
    {
        return require_once("config/config.php");
    }

    public function __construct()
    {
        $configuration = $this->getConfiguration();
        try {
            $this->conn = new PDO("mysql:host=" . $configuration['host'] . ";dbname=" . $configuration['database'], $configuration['user'], $configuration['password']);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }
}



