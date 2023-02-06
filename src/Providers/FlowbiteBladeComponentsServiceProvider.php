<?php

namespace Pablozagni\FlowbiteBladeComponents\Providers;

use Illuminate\Support\ServiceProvider;

class FlowbiteBladeComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Loading the views.
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'flowbite-blade-components');

        // Publishing the views.
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/flowbite-blade-components'),
        ], 'FlowbiteBladeComponents-views');

//        $this->publishes([
//            __DIR__.'/../../resources/views' => base_path('/resources/view/Components'),
//        ], 'FlowbiteBladeComponents-views');
    }

    public function register()
    {
        //
    }
}
