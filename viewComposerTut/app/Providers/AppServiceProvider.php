<?php

namespace App\Providers;

use App\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\ChannelsComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // option 1 : share with every single view
        // View::share('channels', Channel::orderBy('name', 'ASC')->get());

        // option 2 : Granular views with wildcards 
        // View::composer(['posts.*', 'channels.index'], function($view){
        //     $view->with('channels', Channel::orderBy('name', 'ASC')->get());
        // });

        // option 3: Dedicated class  Http/View/Composers/ChannelComposer.php
            // View::composer(['posts.*', 'channels.index'], ChannelsComposer::class);
            View::composer('partials.channels.*', ChannelsComposer::class);
    }
}
