<?php

namespace App\Http\Controllers;
use App\item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = item::all();  
        return view('items.itemsIndex', compact('items'));
    }

}
