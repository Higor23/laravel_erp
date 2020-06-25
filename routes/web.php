<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/clients', 'ClientController');
Route::resource('/products', 'ProductController');
Route::resource('/industry', 'IndustryController');
Route::resource('/providers', 'ProviderController');
Route::resource('/accounts', 'AccountController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
