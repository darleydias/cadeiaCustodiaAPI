<?php

Route::get('categories','App\Http\Controllers\Api\CategoryController@index');
Route::post('categories','App\Http\Controllers\Api\CategoryController@store');
Route::put('categories/{id}','App\Http\Controllers\Api\CategoryController@update');
Route::delete('categories/{id}','App\Http\Controllers\Api\CategoryController@destroy');
Route::get('categories/{id}','App\Http\Controllers\Api\CategoryController@show');

Route::get('casos','App\Http\Controllers\Api\CasoController@index');
Route::get('casos/{id}','App\Http\Controllers\Api\CasoController@show');
Route::post('casos','App\Http\Controllers\Api\CasoController@store');

//$this->apiResource('Categories','App\Http\Controllers\Api\CategoryController');
