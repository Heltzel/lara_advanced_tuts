<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/macro', function () {
    dd(Str::partNumber('3423456754677868'));
});

Route::get('/prefix', function () {
    dd(Str::prefix('ToBePrefixed'));
});
Route::get('/error', function () {
    return Response::errorJson('A huge error occured');
});
