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

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company', 'CompanyController@index')->name('company');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/edit', 'HomeController@postEdit')->name('postEdit');
Route::get('/upload', 'HomeController@upload')->name('upload');
Route::post('/upload', 'HomeController@postUpload')->name('postUpload');
Route::get('/search','CompanyController@search')->name('search');
Route::post('/search','CompanyController@postSearch')->name('postSearch');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
