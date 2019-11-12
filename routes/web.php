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

Route::get('/footer', 'FooterController@index');
Route::get('/', function () {
    return view('accueil');
});

Route::get('/contact', 'ContactController@index');

/*
 *  
 */
Route::prefix('contact')->group(function () {
    Route::post('index', 'ContactController@index');
    Route::get('add', 'ContactController@add');
});
// Route::get('/contact', 'ContactController@index');
