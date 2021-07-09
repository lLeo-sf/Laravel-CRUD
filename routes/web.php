<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('productServices');
});

Route::get('crud', 'App\Http\Controllers\Crud@getAll');
Route::get('crud/{id}', 'App\Http\Controllers\Crud@getById');
Route::post('crud/{productName}/{categoryId}', 'App\Http\Controllers\Crud@post');
Route::delete('crud/{id}', 'App\Http\Controllers\Crud@delete');
Route::put('crud/{id}/{productName}', 'App\Http\Controllers\Crud@update');
