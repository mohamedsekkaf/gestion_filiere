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

Route::get('/', function () {
    return view('home');
})->middleware('web');


Route::get('/', "etabliss@showetabliss");
Route::get('/showdeplome/{id}', "etabliss@showdeplome");


Auth::routes();

Route::group(['middleware' => ['web']], function () {
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/ajouter', "etabliss@showinfo");
Route::post('/ajouter', "etabliss@insertetab");
Route::post('/insertetabfil', "etabliss@insertetabfil");
Route::post('/insertetabmod', "etabliss@insertetabmod");
Route::post('/insertetabelem', "etabliss@insertetabelem");
Route::post('/insertetabdeplome', "etabliss@insertetabdeplome");
});


Route::get('/welcom', 'HomeController@index')->middleware('web');
Route::get("/info/{id}", 'etabliss@info')->middleware('web');
Route::get("/modul/{nom}", 'etabliss@modul')->middleware('web');
Route::get("/element/{nom}", 'etabliss@element')->middleware('web');


Route::get("/logout", function(){
    Auth::logout();
    return redirect("/");
});

Route::get("/update-etablessement", 'etabliss@showNometab')->middleware('web');
Route::post("/update-etablessement", 'etabliss@updateetab')->middleware('web');

Route::get("/update-filiere", 'etabliss@showNomfil')->middleware('web');
Route::post("/update-filiere", 'etabliss@updatefiliere')->middleware('web');


Route::get("/update-module", 'etabliss@showNommod')->middleware('web');
Route::post("/update-module", 'etabliss@updatemodule')->middleware('web');

Route::get("/update-element", 'etabliss@showNomelem')->middleware('web');
Route::post("/update-element", 'etabliss@updateelement')->middleware('web');

Route::get("/update-deplome", 'etabliss@showNomdep')->middleware('web');
Route::post("/update-deplome", 'etabliss@updatedeplome')->middleware('web');

//////////////////////////////////////////////////////////////////////////////

Route::get("/delete/delete-etablessement", 'etabliss@deleteshowNometab')->middleware('web');
Route::post("/delete/delete-etablessement", 'etabliss@deleteetab')->middleware('web');

Route::get("/delete/delete-filiere", 'etabliss@deleteshowNomfil')->middleware('web');
Route::post("/delete/delete-filiere", 'etabliss@deletefiliere')->middleware('web');


Route::get("/delete/delete-module", 'etabliss@deleteshowNommod')->middleware('web');
Route::post("/delete/delete-module", 'etabliss@deletemodule')->middleware('web');

Route::get("/delete/delete-element", 'etabliss@deleteshowNomelem')->middleware('web');
Route::post("/delete/delete-element", 'etabliss@deleteelement')->middleware('web');


Route::get("/delete/delete-deplome", 'etabliss@deleteshowNomdep')->middleware('web');
Route::post("/delete/delete-deplome", 'etabliss@deletedeplome')->middleware('web');










