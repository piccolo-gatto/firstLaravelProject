<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function show(){
        $jsonDirectory = storage_path();
        
        $jsonFiles = File::files($jsonDirectory, function ($filename) {
            return pathinfo($filename, PATHINFO_EXTENSION) === 'json';
        });
    
        $data = [];
    
        foreach ($jsonFiles as $jsonFile) {
            $data[] = json_decode(File::get($jsonFile), true);
        }
    
        return view('data', ['data' => $data]);
    }
}
