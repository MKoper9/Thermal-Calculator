<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /** @test */
    public function foo(): void
    {
        $this->assertTrue(true);
    }
}