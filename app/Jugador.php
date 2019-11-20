<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jugador extends Model
{ 
    use SoftDeletes;
    protected $table = 'jugadors';  
    protected $fillable = ['nombre','edad','created_at','updated_at'];  

    public function getnombreAttribute($value) 
    { 
        return strtoupper($value);
    } 

   public function lideres() 
   { 
       return $this->belongsToMany('App\Lider');
   }
}
