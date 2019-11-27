<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';   
    public $timestamps = false;
    protected $fillable = ['tipo','vida'];  

    public function pets() 
    { 
    return $this->hasMany(Pet::class, 'items_id','id');
    }
} 

