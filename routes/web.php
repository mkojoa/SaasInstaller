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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->middleware('installed')->name('home');

// Application Routes for saas
Route::group(['namespace' => 'Application', 'middleware' => ['installed']], function () { 

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
