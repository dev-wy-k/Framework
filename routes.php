<?php

$router->get('', 'controllers/IndexController.php');
$router->get('about', 'controllers/AboutController.php');
$router->get('contact', 'controllers/ContactController.php');
$router->get('order', 'controllers/OrderController.php');
$router->get('customer', 'controllers/CustomerController.php');
$router->get('update', 'controllers/UpdateController.php');

$router->post('names', 'controllers/add-name.php');
$router->post('update', 'controllers/update-name.php');
$router->post('delete', 'controllers/delete-name.php');

