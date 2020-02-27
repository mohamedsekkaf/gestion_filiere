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

Auth::routes( /*['register' => false]*/);

Route::get('/', function () {
    return view('home');
})->middleware('web');
Route::get('/home', 'HomeController@index');
Route::get('/', 'etabliss@showetabliss');


Route::group(['middleware' => ['auth']], function () {
Route::get('/ajouter', 'etabliss@showinfo');
Route::get('/ajouter/ajouter-etablessement', 'etabliss@Sformajouteretab');
Route::post('/ajouter/ajouter-etablessement', 'etabliss@insertetab');
Route::get('/ajouter/ajouter-filiere', 'etabliss@Sformajouterfil');
Route::post('/ajouter/ajouter-filiere', 'etabliss@insertetabfil');
Route::get('/ajouter/ajouter-semestre', 'etabliss@Sformajoutersem');
Route::post('/ajouter/ajouter-semestre', 'etabliss@insertetabsemestre');
Route::get('/ajouter/ajouter-module', 'etabliss@Sformajoutermod');
Route::post('/ajouter/ajouter-module', 'etabliss@insertetabmod');
Route::get('/ajouter/ajouter-element', 'etabliss@Sformajouterelem');
Route::post('/ajouter/ajouter-element', 'etabliss@insertetabelem');
Route::get('/ajouter/ajouter-deplome', 'etabliss@Sformajouterdep');
Route::post('/ajouter/ajouter-deplome', 'etabliss@insertetabdeplome');
/////////////////////////////////////////////////////////////////////////////
Route::get('/update/update-etablessement', 'etabliss@showNometab');
Route::post('/update/update-etablessement', 'etabliss@updateetab');
Route::get('/update/update-filiere', 'etabliss@showNomfil');
Route::post('/update/update-filiere', 'etabliss@updatefiliere');
Route::get('/update/update-module', 'etabliss@showNommod');
Route::post('/update/update-module', 'etabliss@updatemodule');
Route::get('/update/update-element', 'etabliss@showNomelem');
Route::post('/update/update-element', 'etabliss@updateelement');
Route::get('/update/update-deplome', 'etabliss@showNomdep');
Route::post('/update/update-deplome', 'etabliss@updatedeplome');
Route::get('/update/update-semestre', 'etabliss@showNomsem');
Route::post('/update/update-semestre', 'etabliss@updatesemestre');
//////////////////////////////////////////////////////////////////////////////
Route::get('/delete/delete-etablessement', 'etabliss@deleteshowNometab');
Route::post('/delete/delete-etablessement', 'etabliss@deleteetab');
Route::get('/delete/delete-filiere', 'etabliss@deleteshowNomfil');
Route::post('/delete/delete-filiere', 'etabliss@deletefiliere');
Route::get('/delete/delete-module', 'etabliss@deleteshowNommod');
Route::post('/delete/delete-module', 'etabliss@deletemodule');
Route::get('/delete/delete-element', 'etabliss@deleteshowNomelem');
Route::post('/delete/delete-element', 'etabliss@deleteelement');
Route::get('/delete/delete-deplome', 'etabliss@deleteshowNomdep');
Route::post('/delete/delete-deplome', 'etabliss@deletedeplome');
Route::get('/delete/delete-semestre', 'etabliss@deleteshowNomsem');
Route::post('/delete/delete-semestre', 'etabliss@deletesemestre');
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
