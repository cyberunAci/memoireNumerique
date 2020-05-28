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

/* **************** Valider **************** */

Route::view('login', 'auth/login');
Route::get('/connexion', 'UsersController@submit')->name('connexion');
Route::get('/deconnexion', 'UsersController@deconnexion');

/*
* page "Accueil"
*/
Route::get('/', 'AccueilController@index');

/*
* page "Contact"
*/
Route::prefix('contact')->group(function () {
    Route::get('/', 'ContactController@index');
});

/* 
* page "Mémoire"
*/
Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
    Route::get('/', 'MemoiresController@index');
});

/*
* page "Je participe"
*/
Route::prefix('jeparticipe')->group(function () {

    Route::post('message', 'JeParticipeController@message');
});

/*
* page "Information - Équipe"
*/
Route::get('/information', function () {
    return view('admin.equipe');
});

Route::prefix('error')->group(function () {
    Route::get('/', function () {
        return view('client/error');
    });
});

/*
* page "Médiathèque" 
*/
Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('/', 'MediathequeController@index');
    Route::get('categorie/environnement', 'CategoriesController@getEnvironnement');
/*     Route::get('/environnement', 'MediathequeController@vueEnvir');
 */    Route::get('categories', 'CategoriesController@index');
});

/*
* page "Administrateur" 
*/
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('description', 'AdminController@descView');
    Route::get('equipe', 'AdminController@equipeView');
    Route::get('login', 'Auth\LoginController@login');
    Route::group(['middleware' => 'auth'], function () {
        Route::prefix('/dashboard')->group(function () {
            Route::get('/', 'AdminController@memoiresView');
        });
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
