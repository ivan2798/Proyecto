<?php

namespace App\Policies;

use App\Lider;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policytwo
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any liders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the lider.
     *
     * @param  \App\User  $user
     * @param  \App\Lider  $lider
     * @return mixed
     */
    public function lideresp(User $user, Lider $lider)
    {
        return $user->name == $lider->nombre;
    }

    /**
     * Determine whether the user can create liders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the lider.
     *
     * @param  \App\User  $user
     * @param  \App\Lider  $lider
     * @return mixed
     */
    public function update(User $user, Lider $lider)
    {
        //
    }

    /**
     * Determine whether the user can delete the lider.
     *
     * @param  \App\User  $user
     * @param  \App\Lider  $lider
     * @return mixed
     */
    public function delete(User $user, Lider $lider)
    {
        //
    }

    /**
     * Determine whether the user can restore the lider.
     *
     * @param  \App\User  $user
     * @param  \App\Lider  $lider
     * @return mixed
     */
    public function restore(User $user, Lider $lider)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the lider.
     *
     * @param  \App\User  $user
     * @param  \App\Lider  $lider
     * @return mixed
     */
    public function forceDelete(User $user, Lider $lider)
    {
        //
    }
}
