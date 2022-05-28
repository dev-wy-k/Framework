<?php 

$database->delete($_POST['id'], "users");

header("Location: /");