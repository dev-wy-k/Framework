<?php

$router->get('', "PageController@index");
$router->get('about', "PageController@about");
$router->get('contact', "PageController@contact");
$router->get('order', "PageController@order");
$router->get('customer', "PageController@customer");
$router->get('update', "PageController@update");

$router->get('task', "TaskController@index");

$router->post('names', "PageController@addName");
$router->post('update', "PageController@updateName");
$router->post('delete', "PageController@deleteName");