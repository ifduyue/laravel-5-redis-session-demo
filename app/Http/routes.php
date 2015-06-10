<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $reader = function & ($object, $property) {
        $value = & Closure::bind(function & () use ($property) {
            return $this->$property;
        }, $object, $object)->__invoke();

        return $value;
    };

    return [
        'config' => config('database.redis'),
        'cache\'s connection parameters' => $reader($reader($reader(Cache::connection(), 'connection'), 'parameters'), 'parameters'),
    ];
});
