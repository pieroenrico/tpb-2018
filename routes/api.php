<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$this->post('contacts', 'API\\ContactController@contact')->name('api.contact.store');
$this->post('subscriptions', 'API\\ContactController@subscribe')->name('api.subscribe.store');
