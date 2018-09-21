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

Route::get('/', function()
{
    return view('index');
})->name('home');

Route::get('area_riservata', 'MuseoController@riservata')->middleware('auth')->name('area');

//Route::post('{id}/edit', 'MuseoController@edit')->middleware('auth')->name('news-edit');

Route::get('news/{slug}', 'MuseoController@getSingle');

Route::resource('posts', 'MuseoController')->middleware('auth');

Route::get('news', 'MuseoController@newslist');

Route::resource('contatto', 'RecaptchaController');



Auth::routes();