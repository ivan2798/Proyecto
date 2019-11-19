<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';   
    public $timestamps = false;
    protected $fillable = ['nombre','tipo','items_id'];   

    public function item() 
{ 
    return $this->belongsTo(item::class);
}
}

