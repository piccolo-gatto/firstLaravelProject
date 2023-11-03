<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = [
        //     'alex' => 'Alex',
        //     'kate' => 'Kate'
        // ];

        $users = [
            (object)[
                'id' => 'alex',
                'name' => 'Alex'
            ],
            (object)[
                'id' => 'kate',
                'name' => 'Kate'
            ]
        ];

        $title = 'All users';
        return view('users.users', ['title' => $title, 'users' => $users]);
    }

    public function show($name){
        $title = 'User Info';
        return view('users.user', ['title' => $title,'name' => $name]);
    }
}
