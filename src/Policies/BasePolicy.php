<?php

namespace Sereny\NovaPermissions\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;
use App\User;

class BasePolicy {

    use HandlesAuthorization;

    /**
     * @var string
     */
    protected $key;

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User $user
     * @return mixed
     */
    public function create(Model $user)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model $user
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return mixed
     */
    public function delete(Model $user, $model)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model $user
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return mixed
     */

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model $user
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return mixed
     */
    public function update(Model $user, $model)
    {
        return auth()->user()->id == 1;
        // return auth()->user()->hasRole('admin');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model $user
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return mixed
     */
    public function view(Model $user, $model)
    {
        return auth()->user()->hasRole('admin');
    }

    /**
     * Determine whether the user can view any model.
     *
     * @param  \Illuminate\Database\Eloquent\Model $user
     */
    public function viewAny(Model $user)
    {
        return auth()->user()->hasRole('admin');
    }

}
