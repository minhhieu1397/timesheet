<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Timesheet;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimesheetPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->is_admin == true) {
            return true;
        }
    }

    public function show(User $user, Timesheet $timesheet)
    {
        if ($user->id == $timesheet->user_id ) {
            return true;
        } else {
            return false;
        }
    }
}
