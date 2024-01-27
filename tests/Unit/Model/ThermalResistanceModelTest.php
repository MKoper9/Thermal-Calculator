<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use App\Model\ThermalResistanceModel;

class ThermalResistanceModelTest extends TestCase
{
    /** @test */
    public function calculate(): void
    {
        //Given
        $thermalResistanceModel = new ThermalResistanceModel(0.1, 0.04);

        //When
        $results = $thermalResistanceModel::calculate();

        //Then
        $this->assertEquals(2.5, $results);
    }

}