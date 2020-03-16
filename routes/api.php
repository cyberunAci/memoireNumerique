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


/* Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('/', 'MediathequeController@index');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'CategoriesController@getMemoires'); // TODO id = détails / description
    Route::get('types', 'MediathequeController@types');
    Route::get('types/{id}', 'TypesController@getMemoires')->where('id', "[0-9]+"); // TODO id = détails / description
});
 */
