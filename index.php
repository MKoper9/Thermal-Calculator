<?php

spl_autoload_register(function (string $classNamespace) {
    $path = str_replace(['\\', 'App/'], ['/', ''], $classNamespace);
    $path = "src/$path.php";
    require_once($path);
});

use App\Controller\MaterialController;

require_once("src/Utils/debug.php");

$materialController = new MaterialController();
$materialController->getAllMaterials();
