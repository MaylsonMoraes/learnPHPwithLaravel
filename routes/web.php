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
Route::get('/create', [EventController::class, 'create']);
Route::get('/programs/{id}', [EventController::class,'show']);
Route::post('/programs', [EventController::class,'store']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/martialarts', function () {
    return view('martialArt');
});
Route::get('/products', function () {
    
    $busca = request('search');

    return view('product', ['busca' => $busca]);
});
