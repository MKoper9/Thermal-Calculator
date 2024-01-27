<?php

declare(strict_types=1);

namespace App\Model;

/**
 * R [m2×K/W]
 */
class ThermalResistanceModel extends AbstractModel
{
    private float $dimension;
    private float $heatConductionCoefficient;

    public function __construct(float $dimension, float $heatConductionCoefficient)
    {
        $this->dimension = $dimension;
        $this->heatConductionCoefficient = $heatConductionCoefficient;
    }

    public static function calculate(): float
    {
        return $this->dimension / $this->heatConductionCoefficient;
    }
}
