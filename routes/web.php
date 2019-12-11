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
Route::get('/ajouter', "etabliss@showinfo");
Route::post('/insertetab', "etabliss@insertetap");

Route::group(['middleware' => ['web']], function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index');
});

Route::get('/welcom', 'HomeController@index')->middleware('web');
Route::get("/info/{id}", 'etabliss@info')->middleware('web');

Route::get("/logout", function(){
    Auth::logout();
    return redirect("/");
});








