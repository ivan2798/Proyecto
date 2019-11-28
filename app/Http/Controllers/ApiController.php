<?php

namespace App\Http\Controllers;
use App\Item;  
use App\Pet;  
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiItem(){ 
        return $items = Item::all(); 
    } 

    public function apiPet(){ 
        return $pets =  Pet::with('item:id,tipo','user')->get();
    }
}
