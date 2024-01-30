<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Model\ThermalResistanceModel;
use App\Model\HeatTransferCoefficientModel;

class HeatTransferCoefficientModelTest extends TestCase
{
    /**
     * @dataProvider resultsData
     * @test
     * */
    public function calculateHorizontalStream(int $type, float $sumOfResistance): void
    {
        //Given
        $thermalResistance1 = new ThermalResistanceModel(0.1, 0.04);
        $thermalResistance2 = new ThermalResistanceModel(0.18, 0.9);
        $thermalResistance = new HeatTransferCoefficientModel($type);

        //When
        $coefficient = $thermalResistance->calculate($thermalResistance1, $thermalResistance2);

        //Then
        $this->assertEquals($coefficient, $sumOfResistance);
    }

    /**
     * 1 - stream horizontal
     * 2 - stream top
     * 3 - stream down
     */
    public static function resultsData(): array
    {
        return [
            [1, 0.3484],
            [2, 0.3521],
            [3, 0.3436]
        ];
    }
}
