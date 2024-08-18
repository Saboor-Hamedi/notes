<?php

namespace App\Policies;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function viewAny(User $user): bool
    {
        //
    }
    public function view(User $user, Posts $posts): bool
    {
        //
    }
    public function create(User $user): bool
    {
        //
    }
    public function update(User $user, Posts $posts): bool
    {
        //
        return $user?->id === $posts->user_id;
    }


    public function delete(User $user, Posts $posts): bool
    {
        //
    }


    public function restore(User $user, Posts $posts): bool
    {
        //
    }


    public function forceDelete(User $user, Posts $posts): bool
    {
        //
    }
}
