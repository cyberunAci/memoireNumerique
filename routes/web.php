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
Route::get('/description', function () {
    return view('description');
});
Route::get('/forminsert', function () {
    return view('forminsert');
});

Route::prefix('forminsert')->group(function () {
    Route::post('ajout', 'ForminsertController@ajout'); // /forminsert/add
});

Route::get('/video', 'VideoController@index');
Route::prefix('video')->group(function () {
    Route::post('index', 'VideoController@index');
    Route::post('ajout', 'VideoController@ajout');
});
Route::prefix('/mediatheque')->group(function(){
    Route::post('/recup', 'MediaController@recup');
    Route::get('/', function(){
        return view('mediatheque');
    });
    Route::post('recup', 'MediaController@recup');
});
Route::get('/information', function () {
    return view('equipe');
});
/*
 *  page "Contacts"
 */
Route::get('/contact', 'ContactController@index');
Route::prefix('contact')->group(function () {
    Route::post('index', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});
/**
 *  page "Je participe"
 */
Route::get('/jeparticipe', 'JeParticipeController@index');
Route::prefix('jeparticipe')->group(function () {
    Route::post('index', 'JeParticipeController@index');
    Route::post('message', 'JeParticipeController@message');
});


//route avec id 

Route::any('description/{id}', 'VideoController@getDescription')->where('id', "[0-9]+");


// page image 


Route::prefix('/image')->group(function () {
    Route::any('/', 'ImageController@index');
    Route::any('add', 'ImageController@add');
});

// page article

Route::prefix('/article')->group(function (){
    Route::any('/', 'ArticleController@index');
    Route::any('add', 'ArticleController@add');
});