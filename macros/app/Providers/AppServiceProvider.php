<?php

namespace App\Providers;

use App\Mixins\StrMixins;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

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
        Str::macro('partNumber', function($part){
            return 'AB-'.substr($part,0,3).'-'.substr($part,3);
        });

        // false means don't overwrite a previous macro
        Str::mixin(new StrMixins(), false);

        ResponseFactory::macro('errorJson', function($message = 'default error message'){
            return [
                'message' => $message,
                'errorCode' => 'err123'
            ];
        });
    }
}
