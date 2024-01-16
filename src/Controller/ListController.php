<?php

declare(strict_types=1);

namespace App\Controller;

use App\Exception\ConfigurationException;

class ListController
{
    private static array $configuration = [];

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

}
