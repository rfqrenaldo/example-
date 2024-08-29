<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "name"=>"lala",
        "email"=> "lala@gmail.com"
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    // Logic to handle form submission
    return "Thank you for contacting us!";
});
