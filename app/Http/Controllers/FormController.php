<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function show(){
    	return view('form');
    }
    
    public function store(){
    	$data = $recuest->validadete([
    		'name' => 'required|alpha|max:255',
    		'email' => 'required|email|max:255',
    	]);
    $uniqueFileName = 'data_' . time() . '.json';
    filee_put_contents(storage_path($uniqueFileName), json_encode($data));
    return redirect('/create')->with('success', 'Данные успешно сохранены!');
    }
}
