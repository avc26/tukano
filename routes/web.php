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

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::get('articledel/{id}', 'IndexController@delete')->name('articleDelete');
Route::get('articleedit/{id}', 'IndexController@edit')->name('articleEdit');
Route::post('articleupdate/{id}', 'IndexController@update')->name('articleUpdate');
Route::get('page/add', 'IndexController@add');

Route::post('page/add', 'IndexController@store')->name('articleStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
