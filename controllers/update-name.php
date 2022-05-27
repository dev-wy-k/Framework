<?php

App::get('database')->update([
    "name" => $_POST['name'],
    "id" => $_POST['id']
],'users');

header("Location: /");

