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

Auth::routes();
Route::get('/home', 'EnterpriseController@index');


Route::get('/enterprises', 'EnterpriseController@index');
Route::get('/enterprises/create', 'EnterpriseController@loadCreate');
Route::post('/enterprises', 'EnterpriseController@create');
Route::get('/enterprises/edit/{id}', 'EnterpriseController@loadEdit');
Route::put('/enterprises/edit/{id}', 'EnterpriseController@edit');
Route::get('/enterprises/view/{id}', 'EnterpriseController@view');
Route::delete('/enterprises/deactivate', 'EnterpriseController@deactivate');
Route::get('/enterprises/inactive', 'EnterpriseController@inactive');
Route::put('/enterprises/restore', 'EnterpriseController@restore');
