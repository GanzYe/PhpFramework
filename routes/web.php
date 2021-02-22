<?php
// routes/web.php

/** @var \League\Route\Router $router */


use App\Controllers\SiteController;

$router->get('/', [SiteController::class, 'index']);