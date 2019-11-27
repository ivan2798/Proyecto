<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';   
    public $timestamps = false;
    protected $fillable = ['nombre','tipo','item_id','user_id'];   

    public function item() 
{ 
    return $this->belongsTo(item::class);
} 

/*public function user()
{
    return $this->belongsTo(User::class);
}*/
}

