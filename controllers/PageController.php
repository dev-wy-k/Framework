<?php
namespace controller ;

use core\App;
class PageController
{
    public function index()
    {
        $users = App::get('database')->selectAll("users");

        view('index', [
            "users" => $users
        ]);
    }

    public function addName()
    {
        App::get('database')->insert([
            "name" => request('name')
        ],"users");
        
        redirect('/');
    }

    public function about()
    {
        view('about');
    }

    public function contact()
    {
        view('contact');
    }

    public function order()
    {
        view('order');
    }

    public function customer()
    {
        view('customer');
    }

    public function update()
    {
        $user =  App::get('database')->selectOne(request('id'), 'users');

        view('update', [
            "user" => $user
        ]);
    }

    public function updateName()
    {
        App::get('database')->update([
            "name" => request('name'),
            "id" => request('id')
        ],'users');
        
        redirect('/');
    }

    public function deleteName()
    {
        App::get('database')->delete(request('id'), "users");

        redirect('/');
    }
}