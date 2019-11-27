<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $table = 'liders';   
    public $timestamps = false;
    protected $fillable = ['nombre','tipo'];  

    public function getnombreAttribute($value) 
    { 
        return strtoupper($value);
    }  

    public function settipoAttribute($value) 
    {
        $this->attributes['tipo'] = strtolower($value);
    } 

    public function jugadores() 
   { 
    return $this->belongsToMany('App\Jugador');
   } 

   public function archivos()
   {
       return $this->morphMany(Archivo::class, 'modelo');
   } 

  
}
