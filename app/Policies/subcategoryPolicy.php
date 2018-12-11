<?php

namespace App\Policies;

use App\Models\User;
use App\subcategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class subcategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subcategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\subcategory  $subcategory
     * @return mixed
     */
    public function view(User $user, subcategory $subcategory)
    {
        //
    }

    /**
     * Determine whether the user can create subcategories.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the subcategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\subcategory  $subcategory
     * @return mixed
     */
    public function update(User $user, subcategory $subcategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the subcategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\subcategory  $subcategory
     * @return mixed
     */
    public function delete(User $user, subcategory $subcategory)
    {
        //
    }

    /**
     * Determine whether the user can restore the subcategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\subcategory  $subcategory
     * @return mixed
     */
    public function restore(User $user, subcategory $subcategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the subcategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\subcategory  $subcategory
     * @return mixed
     */
    public function forceDelete(User $user, subcategory $subcategory)
    {
        //
    }
}
