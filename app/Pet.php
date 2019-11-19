<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';   
    public $timestamps = false;
    protected $fillable = ['nombre','tipo'];  
}
