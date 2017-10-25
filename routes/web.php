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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/messages', 'MessagesController@index')->name('message.index');

    Route::get('/message/new', 'MessagesController@new')->name('message.new');
    Route::post('/message/create', 'MessagesController@create')->name('message.create');

    Route::get('/message/edit/{id}', 'MessagesController@edit')->name('message.edit');
    Route::patch('/message/update/{id}', 'MessagesController@update')->name('message.update');

});

