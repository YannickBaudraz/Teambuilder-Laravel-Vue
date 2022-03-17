<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberTeamController;

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

Route::redirect('/', '/home');
Route::get('/home', fn() => view('home'))->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'create')->name('login-form');
        Route::post('/login', 'store')->name('login');
    });

    Route::post('/logout', 'destroy')->name('logout');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/members/{member}/teams', [MemberTeamController::class, 'index'])
         ->name('members.teams.index');

    Route::get('/members/{role}', [MemberController::class, 'role'])
         ->name('members.role');

    Route::resource('members', MemberController::class)->only(['index']);

    Route::resource('members.teams', MemberTeamController::class)->only(['index']);

    Route::resource('teams', TeamController::class)->only('show');
});
