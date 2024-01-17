<?php

declare(strict_types=1);

spl_autoload_register(function (string $classNamespace) {
    $path = str_replace(['\\', 'App/'], ['/', ''], $classNamespace);
    $path = "src/$path.php";
    require_once($path);
});

use App\Controller\ListController;

require_once("src/Utils/debug.php");

$configuration = require_once("config/config.php");
ListController::initConfiguration($configuration);
require_once("templates/pages/list.php");
echo "<h1>Test<h1>";
