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

<<<<
<<< Updated upstream
Route::get('/', 'PagerController@index');
Route::get('/{id}', 'PagerController@xodimlar');
=======
Route::get('/','BolimController@index');
Route::get('bolimlar','BolimController@show')->name('viloyat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> Stashed changes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
