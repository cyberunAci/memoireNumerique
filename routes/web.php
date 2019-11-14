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

Route::get('/description', function() {
    return view('description');
});

Route::get('/forminsert', function() {
    return view('forminsert');
});


    Route::prefix('forminsert')->group(function () {
        Route::post('add', 'ForminsertController@add'); // /forminsert/add
    });

Route::get('/video', 'VideoController@index');

Route::prefix('video')->group(function(){
    Route::post('index', 'VideoController@index');
    Route::post('add', 'VideoController@add');
});

Route::get('/mediatheque', function() {
    return view('mediatheque');
});

Route::get('/information', function () {
    return view('equipe');
});

Route::get('/contact', 'ContactController@index');
/*
 *  page "Contacts"
 */
Route::prefix('contact')->group(function () {
    Route::post('index', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});

Route::get('/jeparticipe', 'JeParticipeController@index');
/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {
    Route::post('index', 'JeParticipeController@index');
    Route::post('message', 'JeParticipeController@message');
});