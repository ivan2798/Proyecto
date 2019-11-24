<?php

namespace App\Policies;

use App\User; 
use App\Jugador;
use Illuminate\Auth\Access\HandlesAuthorization;

class Politica
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    } 

    public function pass()
    {
       
    }
}
