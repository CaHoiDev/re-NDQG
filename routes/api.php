<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\ArtController;
use App\Http\Controllers\UserController;

Route::get('/arts', [ArtController::class, 'getArtsJson']);
Route::get('/arts/{id}', [ArtController::class, 'getArtJson']);
Route::get('/arts/{id}/comments', [ArtController::class, 'getCommentsJson']);
Route::get('/arts/{id}/love', [ArtController::class, 'getLove']);

Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/users/{id}', [UserController::class, 'getUser']);



Route::put('/arts/{id}', [ArtController::class, 'updateArt']);


Route::post('/arts', [ArtController::class, 'addArt']);
Route::post('/arts/{id}/love', [ArtController::class, 'addLove']);
Route::post('/arts/{id}/comments', [ArtController::class, 'addComment']);

//Route::post('/users', [UserController::class, 'createUser']);

Route::delete('/arts/{id}', [ArtController::class, 'delArt']);
