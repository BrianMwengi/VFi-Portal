<?php


Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', 'App\Http\Controllers\AdminController@index', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

//Auth::routes();
});

});

Route::get('/show/{id}', 'App\Http\Controllers\AdminController@show') ;
Route::get('/edit/{id}','App\Http\Controllers\AdminController@edit') ;
Route::post('/update/{id}', 'App\Http\Controllers\AdminController@update') ;