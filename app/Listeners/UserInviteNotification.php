<?php

namespace App\Listeners;

use App\Events\UserInvite;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailInvited;

class UserInviteNotification
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
    public function handle(UserInvite $event): void
    {
        $url = env('FRONTEND_URL').'/set-password/'.$event->userDto->getToken();
        Mail::send(new MailInvited($event->userDto, $url));

    }
}
