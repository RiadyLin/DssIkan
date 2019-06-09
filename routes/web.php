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

Route::get('/', 'PagesController@Login');


// Route::get('/users/{id}', function($id){
//     return 'this is user'. $id;
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/tes-submit', 'PagesController@tesSubmit')->name('page.submit');

Route::get('/logout','PagesController@logout');

