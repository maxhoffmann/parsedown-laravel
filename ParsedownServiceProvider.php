<?php

use Illuminate\Support\ServiceProvider;

class ParsedownServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('parsedown', function()
        {
            return new Parsedown;
        });
    }

}
