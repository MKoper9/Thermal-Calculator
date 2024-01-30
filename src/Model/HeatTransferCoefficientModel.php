<?php

declare(strict_types=1);

namespace App\Model;

class HeatTransferCoefficientModel extends AbstractModel
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
    public function calculate(ThermalResistanceModel ...$thermalResistance): float
    {
        $sumOfResistance = 0;

        foreach ($thermalResistance as $resistance) {
            $resistance = $resistance->calculate();
            $sumOfResistance += $resistance;
        }

        switch ($this->type) {
            case 1:
                $sumOfResistance += 0.17;
                break;
            case 2:
                $sumOfResistance += 0.14;
                break;
            case 3:
                $sumOfResistance += 0.21;
                break;
        }

        return round(1/$sumOfResistance, 4);
    }
}
