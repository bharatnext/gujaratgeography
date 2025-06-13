<?php

namespace Gujarat\LocationData;

use Illuminate\Support\ServiceProvider;

class LocationDataServiceProvider extends ServiceProvider
{
    public function boot()
    {


        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
            __DIR__ . '/database/seeders' => base_path('database/seeders'),
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'location-mc');
    }

    public function register()
    {
        //
    }
}
