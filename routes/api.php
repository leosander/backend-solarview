<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('users/create', [UsersController::class, 'create'])->name('users.create');
Route::get('users/get', [UsersController::class, 'getUsersLogs'])->name('users.get');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});