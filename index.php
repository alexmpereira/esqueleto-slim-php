<?php

use Slim\Factory\AppFactory;
use Unialfa\Controllers\ClienteController;

require_once 'vendor/autoload.php';

$app = AppFactory::create();

$app->get('/clientes', [ClienteController::class, 'getClientes']);

$app->run();