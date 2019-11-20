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


/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::post('ajoutCategorie', 'MemoireController@ajoutCategorie'); // /forminsert/add
    Route::get('allCategorie', 'MemoireController@allCategorie'); // /forminsert/add
});

/*Ajout média */
Route::prefix('media')->group(function () {
    Route::post('ajoutMedia', 'MemoireController@ajoutMedia'); // /forminsert/add
    Route::get('allMedia', 'MemoireController@allMedia'); // /forminsert/add
});



/*Ajout vidéo*/

    Route::prefix('memoire')->group(function () {
        Route::any('/', 'MemoireController@index');
        Route::post('ajout', 'MemoireController@ajout'); // /forminsert/add
        Route::post('affichage', 'MemoireController@affichage');  //affichage des  memoire
    });



/*    ****************    */

Route::get('/video', 'VideoController@index');
Route::prefix('video')->group(function () {
    Route::post('index', 'VideoController@index');
    Route::post('ajout', 'VideoController@ajout');
});
Route::prefix('/mediatheque')->group(function () {
    Route::get('/', function () {
        return view('mediatheque');
    });
    Route::post('recup', 'MediaController@recup');
    Route::post('liste', 'MediaController@liste');

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


// page photo 


Route::prefix('/photo')->group(function () {
    Route::any('/', 'ImageController@index');
    Route::any('add', 'ImageController@add');
    
});

// test
Route::prefix('/test')->group(function() {
    Route::any('/', 'TestController@index');
    Route::any('add', 'TestController@add');
});

// page article

Route::prefix('/article')->group(function (){
    Route::any('/', 'ArticleController@index');
    Route::any('add', 'ArticleController@add');
    Route::any('recup', 'ArticleController@recup');
});

// Recherche

// Route::any('/recherche', 'RechercheController@recherche');

Route::prefix('/recherche')->group(function (){
    Route::any('/', 'RechercheController@recherche');
});