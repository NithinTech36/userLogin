<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\UserInvite;
use App\Listeners\UserInviteNotification;


class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // register event listeners
        $this->app['events']->listen(UserInvite::class, UserInviteNotification::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
