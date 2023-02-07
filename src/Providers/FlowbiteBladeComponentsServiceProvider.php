<?php

namespace Pablozagni\FlowbiteBladeComponents\Providers;

use Illuminate\Support\ServiceProvider;

class FlowbiteBladeComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // // Loading the views.
        // $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'fbc');

        // // Publishing the views.
        // $this->publishes([
        //     __DIR__ . '/../../resources/views' => resource_path('views/vendor/fbc'),
        // ], 'fbc-views');

        $this->publishes([
            __DIR__ . '/../../resources/components' => resource_path('views/components'),
        ], 'fbc-components');

        // Blade::component('z-alert', AlertComponent::class);
    }

    public function register()
    {
        //
    }
}
