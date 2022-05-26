<?php 
// dd($_POST);
$database->delete($_POST['id'], "users");

header("Location: /");