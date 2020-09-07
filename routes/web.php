<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    echo 'test';
});

Route::get('/abc', function () {
    echo 'abc';
});


Route::get('/kiran', function (){
    dd(DB::table('table1')->get());
});

Route::get('/test/{id}', 'KhanController@test');



