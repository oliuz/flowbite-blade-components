<?php

namespace FlowbiteBladeComponents;
 
use Illuminate\Support\ServiceProvider;
 
class FlowbiteBladeComponentsServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->publishes([
            '/resources/views/components' => base_path('/resources/view/components'),
        ],'flowbite-blade-components.views');
    }

    public function register()
    {

    }
}