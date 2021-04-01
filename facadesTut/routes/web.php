<?php

use App\Postcard;
use App\PostcardSendingService;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/postcards', function () {
    $postcardService = new PostcardSendingService('us', 4, 6);
    $postcardService->hello('Hello from CoderTape USA', 'test@mail.com');
});

Route::get('/facades', function () {
   Postcard::hello('Hello from facade', 'abc@mail.com');
});
