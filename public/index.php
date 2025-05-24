<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/db.php';

use Core\Router;
use src\Controllers\ClinicController;
use src\Controllers\DashboardController;

$router = new Router();

// أمثلة تعريف Routes
$router->get('/',            [ClinicController::class, 'index']);
$router->get('/contact',     [ClinicController::class, 'contact']);
$router->get('/login',       [ClinicController::class, 'showLogin']);
$router->post('/login',      [ClinicController::class, 'login']);

$router->get('/dashboard',   [DashboardController::class, 'index']);
$router->get('/orders',      [DashboardController::class, 'orders']);
$router->get('/orders/(\d+)',[DashboardController::class, 'orderDetail']);

// وغيرها لباقي CRUD ...

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
