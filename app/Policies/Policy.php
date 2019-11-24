<?php

namespace App\Policies;

use App\Jugador;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any jugadors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the jugador.
     *
     * @param  \App\User  $user
     * @param  \App\Jugador  $jugador
     * @return mixed
     */
    public function jugadorp(User $user, Jugador $jugador)
    {
        return $user->id == $jugador->id;
    }

    /**
     * Determine whether the user can create jugadors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the jugador.
     *
     * @param  \App\User  $user
     * @param  \App\Jugador  $jugador
     * @return mixed
     */
    public function update(User $user, Jugador $jugador)
    {
        //
    }

    /**
     * Determine whether the user can delete the jugador.
     *
     * @param  \App\User  $user
     * @param  \App\Jugador  $jugador
     * @return mixed
     */
    public function delete(User $user, Jugador $jugador)
    {
        //
    }

    /**
     * Determine whether the user can restore the jugador.
     *
     * @param  \App\User  $user
     * @param  \App\Jugador  $jugador
     * @return mixed
     */
    public function restore(User $user, Jugador $jugador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the jugador.
     *
     * @param  \App\User  $user
     * @param  \App\Jugador  $jugador
     * @return mixed
     */
    public function forceDelete(User $user, Jugador $jugador)
    {
        //
    }
}
