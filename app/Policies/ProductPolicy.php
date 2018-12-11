<?php

namespace App\Policies;

use App\Models\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\role;
use DB;


class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */

    public function __construct(User $user)
    {
        
    }

    public function view(User $user)
    {
        $role_id= $user->role_id;
        $role = DB::table('roles')->where('id', $role_id)->first();
        $array = json_decode(json_encode($role), true);
        return $array['showproduct'] == 1;
    }

    /**
     * Determine whether the user can create products.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $role_id= $user->role_id;
        $role = DB::table('roles')->where('id', $role_id)->first();
        $array = json_decode(json_encode($role), true);
        return $array['addproduct'] == 1;
    }

    /**
     * Determine whether the user can update the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function update(User $user)
    {
        $role_id= $user->role_id;
        $role = DB::table('roles')->where('id', $role_id)->first();
        $array = json_decode(json_encode($role), true);
        return $array['updateproduct'] == 1;
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user)
    {
        $role_id= $user->role_id;
        $role = DB::table('roles')->where('id', $role_id)->first();
        $array = json_decode(json_encode($role), true);
        return $array['delproduct'] == 1;
    }

    /**
     * Determine whether the user can restore the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function restore(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function forceDelete(User $user, Product $product)
    {
        //
    }

    public function show(User $user)
    {
        $role_id= $user->role_id;
        $role = DB::table('roles')->where('id', $role_id)->first();
        $array = json_decode(json_encode($role), true);
        return $array['editproduct'] == 1;
    }
}
