<?php 
 
 App::get('database')->insert([
    "name" => $_POST['name']
],"users");

header("Location: /");
