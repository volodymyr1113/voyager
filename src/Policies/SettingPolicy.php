<?php

namespace TCG\Voyager\Policies;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Contracts\User;

class SettingPolicy extends BasePolicy
{
    /**
     * Determine if the given user can browse the model.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function browse(User $user, $model)
    {
        return $user->hasPermission('browse_settings');
    }
}
