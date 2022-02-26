<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\getDataController ;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles' , [getDataController::class , 'articles']);
Route::get('show-article/{slug}' , [getDataController::class , 'showArticle']);
Route::get('cvs' , [getDataController::class , 'cvs']);
Route::get('settings' , [getDataController::class , 'settings']);
Route::post('contact-us' , [getDataController::class , 'messages']);