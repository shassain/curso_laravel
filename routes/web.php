<?php

use Illuminate\Support\Facades\Route;

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
    return view("layouts.layout_principal");
});// acceder a otra ruta
//Route::resource("user","UserController");// gamma de rutas
          /* GET|HEAD  | user             | user.index   | App\Http\Controllers\UserController@index   | web        |
|        | POST      | user             | user.store   | App\Http\Controllers\UserController@store   | web        |
|        | GET|HEAD  | user/create      | user.create  | App\Http\Controllers\UserController@create  | web        |
|        | GET|HEAD  | user/{user}      | user.show    | App\Http\Controllers\UserController@show    | web        |
|        | PUT|PATCH | user/{user}      | user.update  | App\Http\Controllers\UserController@update  | web        |
|        | DELETE    | user/{user}      | user.destroy | App\Http\Controllers\UserController@destroy | web        |
|        | GET|HEAD  | user/{user}/edit | user.edit    | App\Http\Controllers\UserController@edit    | web */
Route::get("user","UserController@index")->name("user.index");
Route::post("user","UserController@store")->name("user.guardar");
Route::put("user/{user}","UserController@update")->name("user.update");
Route::delete("user/{user}","UserController@destroy")->name("user.destroy");
Route::get("usuario","userController@myfuncion")->name("user.myfuncion");

Route::resource("curso","CursoController");
Route::get("curso_miaccion/{parametro}","CursoController@miaccion");

Route::get("prueba-orm","PruebaOrmController@index");
Route::get("test-orm","PruebaOrmController@testOrm");