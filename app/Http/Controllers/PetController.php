<?php

namespace App\Http\Controllers;

use App\Pet;
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
        $pets = Pet::all();  
        return view('pets.petsIndex', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.petsForm');
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


        Pet::create($request->all());  
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
        return view('pets.petsForm',compact('pets'));
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
}
