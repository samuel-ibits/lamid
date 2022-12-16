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

Route::get('/404.html', function () {
    return view('/404');
});

Route::get('/addEvent.html', function () {
    return view('/addEvent');
});

Route::get('/500.html', function () {
    return view('/500');
});

Route::get('/dashboard.html', function () {
    return view('/dashboard');
});

Route::get('/adminindex.html', function () {
    return view('/adminindex');
});

Route::get('/ongoingevents.html', function () {
    return view('/ongoingevents');
});

Route::get('/resume.html', function () {
    return view('/resume');
});


// db routes

// event

//create
Route::post('createEvents','controller@createEvents');
//insert
Route::get('insertEvents','controller@insertEvents');
//view
Route::get('viewEvents','controller@viewEvents');

//buisness plan
use App\Http\Controllers\plan;
Route::post('/buyPlans', [plan::class, 'buy'] );
Route::post('/createPlans','plans@createPlans');

use App\Http\Controllers\contact;
Route::post('/reachout', [contact::class, 'reachout'] );

use App\Http\Controllers\payment;
Route::get('/paynow', [payment::class, 'paystack'] );

Route::get('/paycallback', [payment::class, 'callback'] );



