<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $html = "<html><head></head><body><div>Hello</div></body></html>";
        return view('test', ['data' => 'Hello test']);
    }

}
