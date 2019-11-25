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

use App\Categorie;

/* **************** TODO **************** */

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::get('afficheCategorie', 'CreateController@afficheCategorie'); // /forminsert/add
    Route::post('getIdCat', 'CreateController@getIdCat');
});
/*Ajout média */
Route::prefix('media')->group(function () {
    Route::get('afficheMedia', 'CreateController@afficheMedia'); // /forminsert/add
});

/* **************** InProgress (manque verif) **************** */
Route::prefix('/mediatheque')->group(function (){ // affiche les informations de la BDD
    Route::any('/', 'MediathequeController@index');
    Route::any('categorie', 'MediathequeController@categorie');
    Route::any('categorie/{id}', 'CreateController@getByCategorie')->where('id', "[0-9]+"); // TODO id = détails / description
    Route::any('type', 'MediathequeController@type');
    Route::any('type/{id}', 'CreateController@getByType')->where('id', "[0-9]+"); // TODO id = détails / description
});
Route::prefix('/create')->group(function (){ // ajout de données dans la BDD // CreateS devient CREATE
    Route::any('/', 'CreateController@index');
    Route::any('add', 'CreateController@add'); // ajouter des memoires
    Route::put('{id}', 'CreateController@update');
    Route::delete('remove', 'CreateController@remove');
    Route::any('categorie/add', 'CreateController@addCategorie');
    Route::any('type/add', 'CreateController@addType');
});
/* **************** Valider **************** */
// acceuil
Route::any('/', 'AcceuilController@index');
/*
 *  page "Contact"
 */
Route::prefix('contact')->group(function () {
    Route::any('/', 'ContactController@index');
    Route::post('index', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});
/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {
    Route::any('/', 'JeParticipeController@index');
    Route::post('index', 'JeParticipeController@index');
    Route::post('message', 'JeParticipeController@message');
});
// Recherche
Route::prefix('/recherche')->group(function (){
    Route::any('/', 'RechercheController@recherche');
});
// L'equipe // information
Route::get('/information', function () {
    return view('admin.equipe');
});