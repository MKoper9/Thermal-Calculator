<?php

declare(strict_types=1);

use App\Request;

$configuration = require_once("config/config.php");

$request = new Request($_GET, $_POST, $_SERVER);