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

//User Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\UserController@index', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/create','App\Http\Controllers\UserController@create') ;
Route::post('/store','App\Http\Controllers\UserController@store') ;

require 'admin.php';
