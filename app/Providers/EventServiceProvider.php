<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\AdminCreatedEvent' => [
            'App\Listeners\GenerateAdminPasswordListener',
        ],
        'App\Events\AdminPasswordCreatedEvent' => [
            'App\Listeners\SendAdminCreatedEmailListener',
        ],
        'App\Events\UserCreatedEvent' => [
            'App\Listeners\GenerateUserPasswordListener',
        ],
         'App\Events\UserPasswordCreatedEvent' => [
            'App\Listeners\SendUserCreatedEmailListener',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
