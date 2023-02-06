<?php

namespace FlowbiteBladeComponents;
 
use Illuminate\Support\ServiceProvider;
 
class FlowbiteBladeComponentsServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->publishes([
            '/resources/views/publishable' => base_path('/resources/view/Components'),
        ],'FlowbiteBladeComponents-views');
    }

    public function register()
    {

    }
}