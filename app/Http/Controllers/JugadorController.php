<?php

namespace App\Http\Controllers;

use App\Jugador;
use Illuminate\Http\Request;


class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();  
        return view('jugadores.jugadoresIndex', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jugadores.jugadoresForm');
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
        'edad' => 'required|integer|between:10,20'] ); 


        Jugador::create($request->all());  
        session()->flash('storej','Agregado realizado');
        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugadores)
    { 
        //dd($jugadores);
        // $this->authorize('jugadorp',$jugadores);
        return view('jugadores.jugadoresShow',compact('jugadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugadores)
    {  
        // $this->authorize('jugadorp',$jugadores);
        return view('jugadores.jugadoresForm',compact('jugadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugadores)
    {  

       // $this->authorize('jugadorp',$jugadores);
        
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'edad' => 'required|integer|between:10,20'] ); 
        
        $jugadores->nombre = $request->nombre; 
        $jugadores->edad = $request->edad; 
      
        

        $jugadores->save();  

        session()->flash('upj','Actualizado realizado');
        return redirect()->route('jugadores.show',$jugadores->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugadores)
    { 
       // $this->authorize('view',$jugadores);
        $jugadores->delete();  
        session()->flash('statusj','Destruido LOGICO realizado');
        return redirect()->route('jugadores.index');
    }
}
