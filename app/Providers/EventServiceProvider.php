<?php

namespace App\Providers;

use App\Events\ActivitySplitCost;
use App\Listeners\ActivitySplitCostListener;
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
        'App\Events\ActivityCostCalculation' => [
            'App\Listeners\ActivityCostCalculationListener',
        ],
        'App\Events\BookingCreatedEvent' => [
            'App\Listeners\BookingCreatedListener',
        ],
        'App\Events\BookingDeletedEvent' => [
            'App\Listeners\BookingDeletedListener',
        ],
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
