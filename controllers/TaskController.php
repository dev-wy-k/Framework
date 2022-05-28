<?php
namespace controller ;
use core\App;

class TaskController
{
    public function index()
    {
        view('task', [
            "tasks" => App::get('database')->selectAll('tasks')
        ]);
    }
}