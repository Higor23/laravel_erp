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
/**
 * Products
 */
Route::resource('/clients', 'ClientController');
Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('products/store', 'ProductController@store')->name('products.store');
Route::get('products/{id}/edit/', 'ProductController@edit')->name('products.edit');
Route::put('products/update', 'ProductController@update')->name('products.update');

// Route::resource('/products', 'ProductController');
// Route::resource('/industry', 'IndustryController');
Route::resource('/providers', 'ProviderController');
// Route::resource('/accounts', 'AccountController');
// Route::resource('/renevue', 'RenevueController');

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
