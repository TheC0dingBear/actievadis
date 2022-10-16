<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createUserController;

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
    return view('app');
});

Route::get('controlpanel/admin/{any}', function () {
    return view('controlpanel');
})->where('any', '.*');

Route::get('controlpanel/activities/{any}', function () {
    return view('activities');
})->where('any', '.*');

Route::get('controlpanel/users/{any}', function () {
    return view('users');
})->where('any', '.*');

Route::get('/registreer', [createUserController::class, 'index'])->middleware('guest');
Route::post('/registreer', [createUserController::class, 'store']);

Route::get('/login', [LoginUserController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginUserController::class, 'login']);
Route::get('/signout', [LoginUserController::class, 'signout'])->middleware('auth');

