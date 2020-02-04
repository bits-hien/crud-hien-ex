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
Route:: prefix('users')->group(function() {
    Route::get('/','UserController@index')->name('users.index');
    Route::get('creat', 'UserController@create')->name('users.create');
    Route::get('{user}/edit', 'UserController@edit')->name('users.edit');
    Route::post('/', 'UserController@store')->name('users.store');
    Route::patch('{user}', 'UserController@update')->name('users.update');
    Route::delete('{user}', 'UserController@destroy')->name('users.destroy');
});
