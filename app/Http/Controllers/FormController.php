<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function show(){
    	return view('form');
    }
    
    public function store(Request $request){
    	$data = $request->validate([
    		'name' => 'required|alpha|max:255',
    		'email' => 'required|email|max:255',
    	]);
        $data = $request->only('name', 'email');
        Storage::makeDirectory('data');
        Storage::put('data/' . uniqid() . '.json', json_encode($data));
        return redirect('/create')->with('message', 'Success!');
    }
}
