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

Route::get('/api/memoires/lastMemoires', 'MemoiresController@lastMemoires');
Route::get('/api/mediatheque', 'MediathequeController@getDatas');
/* **************** TODO **************** */

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::post('getIdCat', 'MemoiresController@getIdCat');
});

/* **************** InProgress (manque verif) **************** */
Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('/', 'MediathequeController@index');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'MemoiresController@getByCategories'); // TODO id = détails / description
    Route::get('types', 'MediathequeController@types');
    Route::get('types/{id}', 'MemoiresController@getByTypes')->where('id', "[0-9]+"); // TODO id = détails / description
});

/* **************** Administrateur *************************** */
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('memoires', 'AdminController@memoiresView');
    Route::get('description', 'AdminController@descView');
    Route::get('equipe', 'AdminController@equipeView');
});
Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
    Route::get('/', 'MemoiresController@index');
});
Route::prefix('/api')->group(function () {
    Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
        Route::get('/', 'MemoiresController@all');
        Route::delete('{id}', 'MemoiresController@remove')->where('id', "[0-9]+");
        Route::get('add', 'MemoiresController@add'); // ajouter des memoires
        Route::put('{id}', 'MemoiresController@update');
        Route::post('categorie/add', 'MemoiresController@addCategorie'); // ajouter une categories
        Route::post('type/add', 'MemoiresController@addType'); // ajouter un type de fichier
    });
});

/* **************** Valider **************** */
// acceuil
Route::get('/', 'AccueilController@index');
/*
 *  page "Contact"
 */
Route::prefix('contact')->group(function () {
    Route::get('/', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});
/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {
    Route::get('/', 'JeParticipeController@index');
    Route::post('message', 'JeParticipeController@message');
});
// Recherche
Route::prefix('/recherche')->group(function () {
    Route::post('/', 'RechercheController@recherche');
});
// L'equipe // information
Route::get('/information', function () {
    return view('admin.equipe');
});

Route::get('/create-personal-token', function () {

    $rnd = random_int(0, 1000);
    $user = new App\User();
    $user->name = $rnd.'oauth';
    $user->password = Hash::make('secret');
    $user->email = $rnd.'oauth@mail.com';
    $user->save();
    
    $token = $user->createToken('visiteur')->accessToken;
    echo $token;
    
    });