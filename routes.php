<?php

$router->get('', 'controllers/IndexController.php');
$router->get('about', 'controllers/AboutController.php');
$router->get('contact', 'controllers/ContactController.php');
$router->get('order', 'controllers/OrderController.php');
$router->get('customer', 'controllers/CustomerController.php');
$router->post('names', 'controllers/add-name.php');

