<?php

namespace App\Http\Controllers; 


use App\Item; 
use App\Pet;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        //$items = item::all();   
        //$items = Item::with('pets')->get(); 
        $items = Item::with(['pets'=>function($query){
            $query->where('tipo','like','%o%');
        }])->get();
        return view('items.itemsIndex', compact('items'));
    }

}
