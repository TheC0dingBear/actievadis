<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginUserController;
use App\Models\Attractie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createUserController;
use App\Http\Controllers\RegistrationsController;
use App\Models\Activity;

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

Route::get('/registreer', [createUserController::class, 'index'])->middleware('guest');
Route::post('/registreer', [createUserController::class, 'store']);

Route::name('login')->get('/login', [LoginUserController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginUserController::class, 'login']);
Route::get('/signout', [LoginUserController::class, 'signout']);

Route::get('infoActiviteit/id={Activity}', function (Activity $Activity) {
    return view('moreInformation', [
        'activity' =>$Activity,
    ]);
})->middleware('auth');

Route::get('/account', [AccountController::class, 'accountInfo'])->middleware('auth');

Route::post('/signupForActivity', [RegistrationsController::class, 'store']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('controlpanel/admin/{any}', function () {
        return view('controlpanel');
    })->where('any', '.*');

    Route::get('controlpanel/activities/{any}', function () {
        return view('activities');
    })->where('any', '.*');

    Route::get('controlpanel/users/{any}', function () {
        return view('users');
    })->where('any', '.*');
});


