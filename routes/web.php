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

// ===== == Ruta Home - Controlador de inicio. == ===== //
Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index'
]);

// ===== == Guarda usuario nuevo. == ===== //
Route::post('/store', [
    'as'   => 'store',
    'uses' => 'HomeController@store'
]);

// ===== == Guarda Lenguaje nuevo. == ===== //
Route::post('/lang/store', [
    'as'   => 'lang',
    'uses' => 'HomeController@langStore'
]);

// ===== == Guarda Lenguaje nuevo. == ===== //
Route::get('/lang/delete/{id}', [
    'as'   => 'delete.lang',
    'uses' => 'HomeController@destroy'
]);

// ===== == Guarda Curso nuevo de Empleado. == ===== //
Route::post('/course/store', [
    'as'   => 'course',
    'uses' => 'HomeController@courseStore'
]);

// ===== == Guarda Curso nuevo de Empleado. == ===== //
Route::post('/course/update', [
    'as'   => 'modify.course',
    'uses' => 'HomeController@update'
]);

// ===== == Ruta Empleado - Muestra usuario seleccionado. == ===== //
Route::get('/empleado/{id}', [
    'as'   => 'user',
    'uses' => 'HomeController@show'
]);
