<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';   
    public $timestamps = false;
    protected $fillable = ['tipo','vida'];  

    public function pets() 
    { 
    return $this->hasMany('App\Pet');
    }
} 

