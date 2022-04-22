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

use App\Http\Controllers\MuseumController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SendEmailController;

//Route::get('/', function (){ return view(); });

Route::get('/', function (){ return view('portfolio.index'); });

Route::get('/museum', [MuseumController::class, 'index']);

Route::get('/work', function (){ return view('portfolio.work'); });

Route::get('/work/gotham', function (){ return view('portfolio.gotham');} );
Route::get('/work/rua', function (){ return view('portfolio.rua');} );

Route::get('/museum/{id}',
    [ArtController::class, 'artDetail'])
    ->where('id', '[0-9]+');

Route::get('/museum/search/{keyword}', [MuseumController::class, 'search']);


Route::post('/send-email', [SendEmailController::class, 'sendEmail']);

Route::get('/email', function (){
    return view('portfolio.thankyou');
});


Route::post('/museum/{id}/love/post', [ArtController::class, 'postLove']);
Route::post('/museum/{id}/comment', [ArtController::class, 'sendComment']);


Route::delete('/museum/{id}/love/delete', [ArtController::class, 'delLove']);
