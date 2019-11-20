<?php

namespace App\Http\Controllers; 


use App\item; 
use App\Pet;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        //$items = item::all();   
        $items = item::with('pets')->get();
        return view('items.itemsIndex', compact('items'));
    }

}
