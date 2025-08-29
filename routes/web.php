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
}) -> name('/');
Route::get('/hello', function () {
    return 'Hello World!';
}) -> name('hello');

Route::get('/contact', function() {
    return 'contact page';
}) ->name('contact');

Route::prefix('admin')->group(function(){
    Route::get('/', function() {
        return view ('admin');
    })-> name('admin');
    Route::get('/dashboard', function() {
        return '<h1 style="text-align: center">Admin Dashboard</h1>';
    })-> name('admin dashboard');
    Route::get('/profile', function () {
        return '<h1 style="text-align: center">Admin Profile</h1>';
    })-> name('admin profile');
});

