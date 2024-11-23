<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Spatie\Permission\Models\Role;

class VerifyListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Verified $event): void
    {
        $user = $event->user;
        $role = Role::where('name', 'User')->first();
        $user->assignRole($role);
    }
}
