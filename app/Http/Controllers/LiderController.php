<?php

namespace App\Http\Controllers;

use App\Lider; 
use App\Jugador; 
use App\Mail\Enviar;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;

class LiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$lideres = Lider::all();   
        $lideres = Lider::with('jugadores')->get();
        return view('lideres.lideresIndex', compact('lideres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $jugadores = Jugador::pluck('nombre','id');
        return view('lideres.lideresForm',compact('jugadores'));
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
        'tipo' => 'required|string|min:4|max:8','jugadores' => 'required'] ); 

        $lider = new Lider;
        //Lider::create($request->all()); 
       // $request->merge(['user_id' => \Auth::id()]);   
        $lider->nombre = $request->nombre; 
        $lider->tipo = $request->tipo; 
        
        $lider->save(); 
        $lider->jugadores()->sync($request->jugadores, false);

        session()->flash('storel','Agregado realizado');
        return redirect()->route('lideres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function show(Lider $lideres)
    {  
       // $this->authorize('lideresp',$lideres);
        $jugadores = Jugador::pluck('nombre','id');
        return view('lideres.lideresShow', ['lideres' => $lideres, 'jugadores' => $jugadores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function edit(Lider $lideres)
    {  
        //$this->authorize('lideresp',$lideres);
        $jugadores = Jugador::pluck('nombre','id');  
        return view('lideres.lideresFormUp', ['lideres' => $lideres, 'jugadores' => $jugadores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lider $lideres)
    { 
        //$this->authorize('lideresp',$lideres);
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'tipo' => 'required|string|min:4|max:8'] ); 
        
        $lideres->nombre = $request->nombre; 
        $lideres->tipo = $request->tipo; 
      
        

        $lideres->save();  
        $lideres->jugadores()->sync($request->jugadores); 

        
        session()->flash('upl','Actualizado realizado');
        return redirect()->route('lideres.show',$lideres->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lider $lideres)
    {
       // $this->authorize('lideresp',$lideres);
        $lideres->delete();  
        session()->flash('statusl','Destruido realizado');
        return redirect()->route('lideres.index');
    } 

}
