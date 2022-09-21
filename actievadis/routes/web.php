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

Route::get('activitycrud/{any}', function () {
    return view('activityCRUD');
})->where('any', '.*'); 

Route::get('/registreer', [createUserController::class, 'index'])->middleware('guest');
Route::post('/registreer', [createUserController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginUserController::class, 'index']);
Route::post('/login', [LoginUserController::class, 'login']);
Route::get('/signout', [LoginUserController::class, 'signout']);

