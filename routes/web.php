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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artiastas', function () {
    return view('artistas',
    [
        'name' => 'Camilo Guerrero',
        'phone' => '3215193127',
        'email' => 'sebasguerrero27@gmail.com'
    ]
    );
});

route::resource('canciones', 'CancionesController');