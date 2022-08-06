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
    })->name('home');

Route::get("/contact", function (){
    return view('contact');
});
Route::get('/service', function (){
    return view('services');
});

Route::get('/donation', function (){
    return view('donation');
});
Route::get('/profile', function (){
    return view('portfolio');
});
Route::get('/giftcard', function (){
    return view('giftcard');
});
