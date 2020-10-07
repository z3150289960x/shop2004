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
//    return view('welcome');
    phpinfo();
});
//Route::get('index', [IndexController::class, 'index']);
Route::any('index','IndexController@index');
Route::any('tj','IndexController@tj');
Route::any('zs','IndexController@zs');
Route::any('sc{id}','IndexController@sc');
Route::get('xg{id}','IndexController@xg');
Route::any('updates{id}','IndexController@updates');


Route::any('lian1','UserController@index');
Route::any('lian1tj','UserController@tj');
Route::any('lian1zs','UserController@zs');