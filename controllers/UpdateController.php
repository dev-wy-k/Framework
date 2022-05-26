<?php 

$user =  $database->selectOne($_GET['id'], 'users');
require "views/update.view.php";