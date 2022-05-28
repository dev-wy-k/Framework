<?php

use controller\PageController;
use controller\TaskController;

$router->get('', [PageController::class, 'index']);
$router->get('about', [PageController::class, 'about']);
$router->get('contact', [PageController::class, 'contact']);
$router->get('order', [PageController::class, 'order']);
$router->get('customer', [PageController::class, 'customer']);
$router->get('update', [PageController::class, 'update']);

$router->get('task', [TaskController::class, 'index']);

$router->post('names', [PageController::class, 'addName']);
$router->post('update', [PageController::class, 'updateName']);
$router->post('delete', [PageController::class, 'deleteName']);