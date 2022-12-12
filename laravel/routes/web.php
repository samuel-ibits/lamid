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

Route::get('/index.html', function () {
    return view('index');
});
Route::get('/insight.html', function () {
    return view('insight');
});

Route::get('/events.html', function () {
    return view('events');
});


Route::get('/contactus.html', function () {
    return view('contactus');
});

Route::get('/asset', function () {
    return url('1_1.jpg');
});

// db routes

// event

//create
Route::post('createEvents','controller@createEvents');
//insert
Route::get('insertEvents','controller@insertEvents');
//view
Route::get('viewEvents','controller@viewEvents');




