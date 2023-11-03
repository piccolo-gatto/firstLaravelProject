<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        
        return view('form');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'email' => 'required|email'
        ], [
            'name.required' => 'Представтесь',
            'lastname.required' => 'Фамилии нет',
            'email.required' => 'Забыли email',
            'email.email' => 'Не похоже на Email'
        ]);

        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $city = $request->input('city');

        return $name;
        // return 'Ok';
    }

}
