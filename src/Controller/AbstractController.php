<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    private static array $configuration = [];

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }
}
