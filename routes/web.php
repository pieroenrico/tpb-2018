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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/test', 'HomeController@index')->name('home');
Route::get('/test-equipo', 'TeamController@index')->name('home');
Route::get('/test-producciones', 'ProductController@index')->name('home');
Route::get('/test-investigacion', 'InvestigationController@index')->name('home');
Route::get('/test-divulgacion', 'PressController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('quienes-somos', 'TeamController@index')->name('about');
Route::get('producciones', 'ProductController@index')->name('products');
Route::get('investigacion', 'InvestigationController@index')->name('investigation');
Route::get('divulgacion', 'PressController@index')->name('press');
Route::get('contacto', 'ContactController@index')->name('contact');

Route::group(['prefix' => 'produccion'], function(){
    Route::get('{id}', 'ProductController@product')->name('product');
});