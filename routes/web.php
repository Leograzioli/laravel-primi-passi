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
    $data = [
            "greeting" => "my first laravel page :)"
    ];
    return view('home', $data);
})->name("home");

Route::get('/about-us', function () {
    $data = [
        "greeting" => "my second laravel page :)"
];
    return view('about', $data );
})->name("about");

Route::get('/contact-us', function () {
    $data = [
        "greeting" => "my third laravel page :)"
];
    return view('contact-us', $data);
})->name("contact-us");