<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/admin/dashboard/categorie', 'AdminController@getListCategories');
Route::get('/admin', 'ConnectionController@index');
Route::get('/memoires/lastMemoires', 'MemoiresController@lastMemoires');
Route::get('/mediatheque', 'MediathequeController@getDatas');

/*
* page "Contact"
*/
Route::prefix('contact')->group(function () {
    Route::post('message', 'ContactController@message');
});

/*
* page "Recherche"
*/
Route::prefix('/recherche')->group(function () {
    Route::post('/', 'RechercheController@recherche');
});

/*
* page "Dashboard"
*/
Route::prefix('/admin')->group(function () {
    Route::post('register', 'Auth\RegisterController@register');
    Route::prefix('/dashboard')->group(function () {
        Route::get('/{id}', 'AdminController@get');
        Route::get('getCategorie', 'AdminController@getCategorie'); //affiche ds formulaire
        Route::get('media', 'AdminController@getListMedia'); //affiche ds formulaire
        Route::post('/add', 'AdminController@add'); // ajouter une mémoire
        Route::post('/addCategorie', 'AdminController@addCategorie'); // ajouter une categorie
        Route::post('/addType', 'AdminController@addType'); // ajouter un type de fichier
        Route::delete('/{id}', 'AdminController@remove')->where('id', "[0-9]+"); // supprimer une mémoire
    });
});

/*
* page "Mediathèque"
*/
Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('categories/{id}', 'CategoriesController@getMemoires'); // TODO id = détails / description
    Route::get('types', 'MediathequeController@types');
    Route::get('types/{id}', 'TypesController@getMemoires')->where('id', "[0-9]+"); // TODO id = détails / description
});