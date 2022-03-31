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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/programs/{id}', [EventController::class,'show']);
Route::post('/programs', [EventController::class,'store']);
Route::delete('/programs/{id}', [EventController::class,'destroy'])->middleware('auth');
Route::get('/programs/edit/{id}', [EventController::class,'edit'])->middleware('auth');
Route::put('/programs/update/{id}', [EventController::class,'update'])->middleware('auth');

Route::get('/martialarts', function () {
    return view('martialArt');
});

Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');

