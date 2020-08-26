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

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/store', 'ProductController@store')->name('product.store');
Route::get('product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::put('product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('product/{id}/show', 'ProductController@show')->name('product.show');

Route::resource('/clients', 'ClientController');
// Route::resource('/products', 'ProductController');
// Route::resource('/industry', 'IndustryController');
Route::resource('/providers', 'ProviderController');
// Route::resource('/accounts', 'AccountController');
// Route::resource('/renevue', 'RenevueController');

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
