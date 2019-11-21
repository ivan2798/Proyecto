<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuezController extends Controller
{
    public function historia() 
    { 
        $portafolio = [ 
             ['title' => 'SATOSHI' ], 
             ['title' => 'SHIGERU' ],
        ]; 

        return view('history',compact('portafolio'));
    } 
    
    public function inicio() 
    {
    return view('welcome'); 
    }
}
