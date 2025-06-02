<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//route peraturan
Route::apiResource('/peraturan', App\Http\Controllers\Api\PeraturanController::class);

//route for document
Route::apiResource('/dokumen', App\Http\Controllers\Api\DokumenController::class);

//Route for instagram
Route::get('/instagram', [App\Http\Controllers\Api\InstagramController::class, 'index']);

//route for berita
Route::get('/news', [App\Http\Controllers\Api\NewsController::class, 'index']);
Route::get('/news/{id}', [App\Http\Controllers\Api\NewsController::class, 'show']);
