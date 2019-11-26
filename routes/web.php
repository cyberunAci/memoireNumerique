<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now Memoires something great!
|
*/

use App\Categorie;


Route::get('/api/mediatheque', 'MediathequeController@getDatas');
/* **************** TODO **************** */

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::get('afficheCategorie', 'MemoiresController@afficheCategorie'); // /forminsert/add
    Route::post('getIdCat', 'MemoiresController@getIdCat');
});
/*Ajout média */
Route::prefix('media')->group(function () {
    Route::get('afficheMedia', 'MemoiresController@afficheMedia'); // /forminsert/add
});

/* **************** InProgress (manque verif) **************** */
Route::prefix('/mediatheque')->group(function (){ // affiche les informations de la BDD
    Route::any('/', 'MediathequeController@index');
    Route::any('categorie', 'MediathequeController@categorie');
    Route::any('categorie/{id}', 'MemoiresController@getByCategorie')->where('id', "[0-9]+"); // TODO id = détails / description
    Route::any('type', 'MediathequeController@type');
    Route::any('type/{id}', 'MemoiresController@getByType')->where('id', "[0-9]+"); // TODO id = détails / description
});
Route::prefix('/memoires')->group(function (){ // ajout de données dans la BDD // MemoiresS devient Memoires
    Route::any('/', 'MemoiresController@index');
    Route::any('add', 'MemoiresController@add'); // ajouter des memoires
    Route::put('{id}', 'MemoiresController@update');
    Route::delete('remove', 'MemoiresController@remove');
    Route::any('categorie/add', 'MemoiresController@addCategorie'); // ajouter une categories
    Route::any('type/add', 'MemoiresController@addType'); // ajouter un type de fichier
});
/* **************** Valider **************** */
// acceuil
Route::any('/', 'AcceuilController@index');
/*
 *  page "Contact"
 */
Route::prefix('contact')->group(function () {
    Route::any('/', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});
/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {
    Route::any('/', 'JeParticipeController@index');
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