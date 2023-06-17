<?php

use app\Controllers\LoginController;
use app\Controllers\RegisterController;
use app\Controllers\ScheduleController;
use app\Controllers\WelcomeController;

$router->get('/', WelcomeController::class, 'show');
$router->get('/login', LoginController::class, 'show')->only('guest');
$router->post('/login', LoginController::class, 'login');
$router->logout('/schedule', LoginController::class, 'logout');

$router->get('/register', RegisterController::class, 'show')->only('guest');
$router->post('/register', RegisterController::class, 'register')->only('guest');

$router->get('/schedule', ScheduleController::class, 'show')->only('member');
