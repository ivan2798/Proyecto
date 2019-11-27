<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';   
    public $timestamps = false;
    protected $fillable = ['nombre','tipo','items_id','users_id'];   

    public function item() 
    { 
    return $this->belongsTo(Item::class, 'items_id' ,'id');
    }  

    public function user(){ 
        return $this->belongsTo(User::class, 'users_id' ,'id');
    }



}

