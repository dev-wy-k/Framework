<?php 

class TaskController
{
    public function index()
    {
        view('task', [
            "tasks" => App::get('database')->selectAll('tasks')
        ]);
    }
}