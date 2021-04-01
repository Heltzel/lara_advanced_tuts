<?php

namespace App;

class Postcard
{
    protected static function resolveFacades($name){
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        // dd( app()->make('Postcard'));
        // dd( app()['Postcard']);
        // dd($method, $arguments);

        return (self::resolveFacades('Postcard'))->$method(...$arguments);
    }
}
