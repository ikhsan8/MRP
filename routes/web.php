<?php

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
    return view('layouts.v_template');
});

//Asset
Route::get('/all_assets', 'all_assetsController@index')->name('all_assets.home');
Route::get('/all_assets/add', 'all_assetsController@create')->name('all_assets.create');
Route::post('/all_assets/add', 'all_assetsController@store')->name('all_assets.store');
Route::get('/all_assets/gettree', 'all_assetsController@getTree')->name('all_assets.gettree');

// Category
 Route::get('/category', 'categoryController@index')->name('category.home'); 
 Route::get('/category/add', 'categoryController@create')->name('category.form');
 Route::get('/category/{id}/edit', 'categoryController@edit');
 Route::post('/category/store', 'categoryController@store')->name('category.store');
 Route::put('/category/{id}', 'categoryController@update')->name('category.update');
 Route::delete('/category/{id}', 'categoryController@destroy')->name('category.destroy');
 
 // Place
  Route::get('/place', 'placeController@index')->name('place.home'); 
  Route::get('/place/add', 'placeController@create')->name('place.form');
  Route::get('/place/{id}/edit', 'placeController@edit');
  Route::post('/place/store', 'placeController@store')->name('place.store');
  Route::put('/place/{id}', 'placeController@update')->name('place.update');
  Route::delete('/place/{id}', 'placeController@destroy')->name('place.destroy');

// Unit
 Route::get('/unit', 'unitController@index')->name('unit.home');
 Route::get('/unit/add', 'unitController@create')->name('unit.form');
 Route::get('/unit/{id}/edit', 'unitController@edit');
 Route::post('/unit/store', 'unitController@store')->name('unit.store');
 Route::put('/unit/{id}', 'unitController@update')->name('unit.update');
 Route::delete('/unit/{id}', 'unitController@destroy')->name('unit.destroy');

// Problem
Route::get('/problem', 'problemController@index')->name('problem.home'); 
Route::get('/problem/add', 'problemController@create')->name('problem.form');
Route::get('/problem/{id}/edit', 'problemController@edit');
Route::post('/problem/store', 'problemController@store')->name('problem.store');
Route::put('/problem/{id}', 'problemController@update')->name('problem.update');
Route::delete('/problem/{id}', 'problemController@destroy')->name('problem.destroy');

// countermeasure
Route::get('/countermeasure', 'countermeasureController@index')->name('countermeasure.home'); 
Route::get('/countermeasure/add', 'countermeasureController@create')->name('countermeasure.form');
Route::get('/countermeasure/{id}/edit', 'countermeasureController@edit');
Route::post('/countermeasure/store', 'countermeasureController@store')->name('countermeasure.store');
Route::put('/countermeasure/{id}', 'countermeasureController@update')->name('countermeasure.update');
Route::delete('/countermeasure/{id}', 'countermeasureController@destroy')->name('countermeasure.destroy');






















//Route::resource('/type', 'typeController');
// Route::get('/asset', 'AssetController@index');
// Route::get('/asset/create', 'AssetController@create');
// Route::get('/asset/{id}/edit', 'AssetController@edit');
// Route::post('/asset/store', 'AssetController@store')->name('asset.store');
// Route::put('/asset/{id}', 'AssetController@update')->name('asset.update');
// Route::delete('/asset/{id}', 'AssetController@destroy')->name('asset.delete');
