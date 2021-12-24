<?php

namespace App\Policies;

use App\Models\post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class postPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function delete(User $user, post $post)
    {
        return $user->id === $post->user_id;
    }
}
