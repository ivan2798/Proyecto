<?php

namespace App\Http\Controllers;

use App\Pet; 
use App\Item; 
use Illuminate\Support\Facades\Mail;
use App\Mail\Enviar;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::with('item:id,tipo','user')->get();
        //dd($pets);
        //$items = item::all();
        return view('pets.petsIndex', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $items = Item::pluck('tipo', 'id');
        return view('pets.petsForm', ['items' => $items]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'tipo' => 'required|string|min:4|max:8'] ); 
        
        $request->merge(['users_id' => \Auth::id()]);
        
        //dd($request);
        Pet::create($request->all());   
        //dd($request);
        session()->flash('storep','Agregado realizado');
        return redirect()->route('pets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pets)
    {
        return view('pets.petsShow',compact('pets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pets)
    { 
        $items = Item::pluck('tipo', 'id');
        return view('pets.petsForm',compact('pets') ,['items' => $items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pets)
    {
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'tipo' => 'required|string|min:4|max:8'] ); 
        
        $pets->nombre = $request->nombre; 
        $pets->tipo = $request->tipo; 
        $pets->items_id = $request->items_id; 
        $pets->save();   
        
        

        session()->flash('upp','Actualizado realizado');
        return redirect()->route('pets.show',$pets->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pets)
    {
        $pets->delete();  
        session()->flash('statusp','Destruido realizado');
        return redirect()->route('pets.index');
    } 

    public function notificarEnvio(Pet $pet)
    { 
        $pet->load('user');  
        //$pet = Pet::with('user')->get();
        //dd($pet);
        //Envía correo al usuario
        Mail::to($pet->user->email)->send(new Enviar($pet));
        return redirect()->route('pets.index');
    }
}
