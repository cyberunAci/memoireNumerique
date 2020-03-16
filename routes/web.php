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
use Illuminate\Support\Facades\Request;



Route::view('login', 'auth/login');
Route::get('/connexion', 'UsersController@submit')->name('connexion');
Route::get('/deconnexion', 'UsersController@deconnexion');

/* **************** TODO **************** */

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::post('getIdCat', 'MemoiresController@getIdCat');
});

/* **************** InProgress (manque verif) **************** */
Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('/', 'MediathequeController@index');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'CategoriesController@getMemoires'); // TODO id = détails / description
    Route::get('types', 'MediathequeController@types');
    Route::get('types/{id}', 'TypesController@getMemoires')->where('id', "[0-9]+"); // TODO id = détails / description
});

/* **************** Administrateur *************************** */
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('description', 'AdminController@descView');
    Route::get('equipe', 'AdminController@equipeView');

    Route::get('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::group(['middleware' => 'auth'], function () {
        Route::prefix('/dashboard')->group(function () {
            Route::get('/', 'AdminController@memoiresView');
            Route::get('/{id}', 'AdminController@get');
            Route::get('getCategorie', 'AdminController@getCategorie'); //affiche ds formulaire
            Route::get('media', 'AdminController@getListMedia'); //affiche ds formulaire
            Route::post('/add', 'AdminController@add'); // ajouter une mémoire
            Route::post('/addCategorie', 'AdminController@addCategorie'); // ajouter une categorie
            Route::post('/addType', 'AdminController@addType'); // ajouter un type de fichier
            Route::delete('/{id}', 'MemoiresController@remove')->where('id', "[0-9]+");
        });
     
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

/* 
* page "Mémoire"
*/
Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
    Route::get('/', 'MemoiresController@index');
});

/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {

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

Route::prefix('error')->group(function () {
    Route::get('/', function () {
        return view('client/error');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
