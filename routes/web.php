<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('home');
})->middleware('web');
Route::get('/home', 'HomeController@index');
Route::get('/', 'etabliss@showetabliss');


Route::group(['middleware' => ['web']], function () {

Route::get('/ajouter', 'etabliss@showinfo')->middleware('auth');
Route::post('/ajouter', 'etabliss@insertetab')->middleware('auth');
Route::post('/insertetabfil', 'etabliss@insertetabfil')->middleware('auth');
Route::post('/insertetabmod', 'etabliss@insertetabmod')->middleware('auth');
Route::post('/insertetabelem', 'etabliss@insertetabelem')->middleware('auth');
Route::post('/insertetabdeplome', 'etabliss@insertetabdeplome')->middleware('auth');
Route::post('/insertetabsemestre', 'etabliss@insertetabsemestre')->middleware('auth');

Route::get('/update/update-etablessement', 'etabliss@showNometab')->middleware('auth');
Route::post('/update/update-etablessement', 'etabliss@updateetab')->middleware('auth');
Route::get('/update/update-filiere', 'etabliss@showNomfil')->middleware('auth');
Route::post('/update/update-filiere', 'etabliss@updatefiliere')->middleware('auth');
Route::get('/update/update-module', 'etabliss@showNommod')->middleware('auth');
Route::post('/update/update-module', 'etabliss@updatemodule')->middleware('auth');
Route::get('/update/update-element', 'etabliss@showNomelem')->middleware('auth');
Route::post('/update/update-element', 'etabliss@updateelement')->middleware('auth');
Route::get('/update/update-deplome', 'etabliss@showNomdep')->middleware('auth');
Route::post('/update/update-deplome', 'etabliss@updatedeplome')->middleware('auth');
Route::get('/update/update-semestre', 'etabliss@showNomsem')->middleware('auth');
Route::post('/update/update-semestre', 'etabliss@updatesemestre')->middleware('auth');
//////////////////////////////////////////////////////////////////////////////
Route::get('/delete/delete-etablessement', 'etabliss@deleteshowNometab')->middleware('auth');
Route::post('/delete/delete-etablessement', 'etabliss@deleteetab')->middleware('auth');
Route::get('/delete/delete-filiere', 'etabliss@deleteshowNomfil')->middleware('auth');
Route::post('/delete/delete-filiere', 'etabliss@deletefiliere')->middleware('auth');
Route::get('/delete/delete-module', 'etabliss@deleteshowNommod')->middleware('auth');
Route::post('/delete/delete-module', 'etabliss@deletemodule')->middleware('auth');
Route::get('/delete/delete-element', 'etabliss@deleteshowNomelem')->middleware('auth');
Route::post('/delete/delete-element', 'etabliss@deleteelement')->middleware('auth');
Route::get('/delete/delete-deplome', 'etabliss@deleteshowNomdep')->middleware('auth');
Route::post('/delete/delete-deplome', 'etabliss@deletedeplome')->middleware('auth');
Route::get('/delete/delete-semestre', 'etabliss@deleteshowNomsem')->middleware('auth');
Route::post('/delete/delete-semestre', 'etabliss@deletesemestre')->middleware('auth');
});
Route::get('/welcom', 'HomeController@index')->middleware('web');
Route::get('/info/{id}', 'etabliss@info')->middleware('web');
Route::get('/modul/{nom}', 'etabliss@modul')->middleware('web');
Route::get('/element/{nom}', 'etabliss@element')->middleware('web');
Route::get('/showdeplome/{id}', 'etabliss@showdeplome')->middleware('web');
Route::get('/semestre/{nom}', 'etabliss@semestre')->middleware('web');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
