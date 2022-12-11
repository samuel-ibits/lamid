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

Route::get('/welcome', function () {
    return view('welcome');
});

//page  routes


Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/event', function () {
    return view('events');
});


// db routes

// event

//create
Route::post('createEvents','controller@createEvents');
//insert
Route::get('insertEvents','controller@insertEvents');
//view
Route::get('viewEvents','controller@viewEvents');




