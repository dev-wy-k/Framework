<?php 

$user =  App::get('database')->selectOne($_GET['id'], 'users');

view('update', [
    "user" => $user
]);