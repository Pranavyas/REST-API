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

Route::get('/show','post@show');

Route::get('/delete/{id}','post@delete');

Route::get('/insert/{title}/{task}/{priority}/{date}','post@insert');

Route::get('/edit/{title}/{edit}','post@edit');