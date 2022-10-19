<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;
/**
 * Class GenerateAdminPasswordListener
 *
 * @author Mujtaba Ahmed <mujtaba.ahmed@vservices.com>
 * @date   8/21/2020
 */
class GenerateUserPasswordListener
{
    private $userRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(\App\Models\User $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreatedEvent  $event
     * @return void
     */
    public function handle(\App\Events\UserCreatedEvent $event)
    {
        $user              = $event->user;
        $rawRandomPassword = Str::random(8);
        $encryptedPassword = bcrypt($rawRandomPassword);

        User::where('id', $user->id)->update(['password' => $encryptedPassword]);

        $data = [
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => $rawRandomPassword,
        ];

        /*
         * Trigger UserPasswordCreatedEvent
         */
        event(new \App\Events\UserPasswordCreatedEvent($data));
    }
}
