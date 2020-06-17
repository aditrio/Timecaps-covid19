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
    return view('home.home');
});

// Route::get('/login2', function () {
//     return view('home.login');
// });
// Route::get('/reg', function () {
//     return view('home.register');
// });

// Route::get('/profile', function () {
//     return view('dash.dashboard');
// });


Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');

Route::resource('posts','PostController');