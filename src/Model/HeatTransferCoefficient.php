<?php

declare(strict_types=1);

namespace App\Model;

use App\Model\ThermalResistance;

class HeatTransferCoefficient extends AbstractModel
{
    private int $type = 0;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    /**
     * type = 1 heat stream horizontal
     * type = 2 heat stream top
     * type = 3 heat stream down
     */
    public static function calculate(ThermalResistance ...$thermalResistance): float
    {
        $sumOfresistance = 0;

        foreach ($thermalResistance as $resistance) {
            $resistance = $resistance->calculate();
            $sumOfresistance += $resistance;
        }

        switch ($this->type) {
            case 1:
                $sumOfresistance += 0.17;
                break;
            case 2:
                $sumOfresistance += 0.14;
                break;
            case 3:
                $sumOfresistance += 0.21;
                break;
        }

        return 1/$sumOfresistance;
    }
}
