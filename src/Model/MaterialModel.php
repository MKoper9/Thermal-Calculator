<?php

declare(strict_types=1);
namespace App\Model;

use PDO;

class MaterialModel extends AbstractModel
{
    public function getAll(): array
    {
        $query = "SELECT * FROM materials";
        $materials = $this->conn->query($query);
        return $materials->fetchAll(PDO::FETCH_ASSOC);
    }

}