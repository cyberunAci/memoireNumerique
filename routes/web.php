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

<<<<<<< HEAD
/* **************** TODO **************** */
=======
Route::get('/footer', 'FooterController@index');
Route::get('/', function () {
    return view('client.accueil');
});
Route::get('/description', function () {
    return view('description');
});

>>>>>>> 962d8b7a718357604f3f6d84c53c80088fa9ee1a

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::post('addCategorie', 'MemoireController@addCategorie'); // /forminsert/add
    Route::get('afficheCategorie', 'MemoireController@afficheCategorie'); // /forminsert/add
    Route::post('getIdCat', 'MemoireController@getIdCat');
});
/*Ajout média */
Route::prefix('media')->group(function () {
    Route::post('addMedia', 'MemoireController@addMedia'); // /forminsert/add
    Route::get('afficheMedia', 'MemoireController@afficheMedia'); // /forminsert/add
});
/*Groupe mémoire*/
Route::prefix('memoire')->group(function () {
    Route::any('/', 'MemoireController@index');
    Route::post('ajout', 'MemoireController@ajout'); // /forminsert/add
    Route::post('affichage', 'MemoireController@affichage');  //affichage des  memoire
    Route::get('supprimer/{id}', 'MemoireController@supprimerMemoire'); //memoire/supprimer
});
// Route::prefix('video')->group(function () {
//     Route::get('/', 'VideoController@index');
//     Route::post('index', 'VideoController@index');
//     Route::post('ajout', 'VideoController@ajout');
// });
// Route::prefix('/mediatheque')->group(function () {
//     Route::get('/', function () {
//         return view('mediatheque');
//     });
//     Route::post('recup', 'MediaController@recup');
//     Route::post('liste', 'MediaController@liste');
// });
Route::get('/information', function () {
    return view('equipe');
});
//route avec id 
Route::any('description/{id}', 'VideoController@getDescription')->where('id', "[0-9]+");
// page photo 
Route::prefix('/photo')->group(function () {
    Route::any('/', 'ImageController@index');
    Route::any('add', 'ImageController@add');
});
// page article
Route::prefix('/article')->group(function () {
    Route::any('/', 'ArticleController@index');
    Route::any('add', 'ArticleController@add');
    Route::any('recup', 'ArticleController@recup');
});
// page "description" // => page {id}
Route::get('/description', function () {
    return view('description');
});
<<<<<<< HEAD
=======
Route::prefix('/mediatheque')->group(function () {
    Route::get('/', function () {
        return view('client.mediatheque');
    });
    Route::post('recup', 'MediaController@recup');
    Route::post('liste', 'MediaController@liste');
>>>>>>> 962d8b7a718357604f3f6d84c53c80088fa9ee1a

/* **************** InProgress **************** */
Route::prefix('/mediatheque')->group(function (){ // affiche les informations de la BDD
    Route::any('/', 'MediaController@index');
    Route::any('memoire', 'MediaController@memoire');
    Route::any('{id}', 'MediaController@id')->where('id', "[0-9]+"); // TODO id = détails / description
});
<<<<<<< HEAD
Route::prefix('/memoires')->group(function (){ // ajout de données dans la BDD
    Route::any('/', 'MemoireController@index');
    Route::any('add', 'MemoireController@add');
    Route::any('update', 'MemoireController@update');
    Route::any('remove', 'MemoireController@remove');
=======
Route::get('/information', function () {
    return view('admin.equipe');
>>>>>>> 962d8b7a718357604f3f6d84c53c80088fa9ee1a
});

/* **************** BON **************** */
// acceuil
Route::any('/', 'AcceuilController@index');
/*
 *  page "Contacts"
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
<<<<<<< HEAD
/*
 * Page "Recherche"
 */
Route::prefix('/recherche')->group(function () {
=======


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

Route::prefix('/memoires')->group(function (){
    Route::any('/', 'ArticleController@index');
    Route::any('add', 'ArticleController@add');
    Route::any('recup', 'ArticleController@recup');
});

// Recherche

// Route::any('/recherche', 'RechercheController@recherche');

Route::prefix('/recherche')->group(function (){
>>>>>>> 962d8b7a718357604f3f6d84c53c80088fa9ee1a
    Route::any('/', 'RechercheController@recherche');
});

Route::prefix('/recherche')->group(function (){
    Route::any('/', 'RechercheController@recherche');
});

